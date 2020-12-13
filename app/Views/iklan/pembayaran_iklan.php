<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="card p-3 mx-auto" style="max-width: 700px;">
  <h2><?= $content ?></h2>



  <h2 class="card-title h5">Pembayaran untuk iklan
    <a href="<?= base_url('iklan/read/' . $data['id']) ?>"><?= $data['judul'] ?> </a>
  </h2>
  <h5>Total Pembayaran <span class="text-danger">Rp.20.000</span></h5>


  <div class="alert alert-info  my-3" role="alert">
    <h4 class="alert-heading h5">Tata Cara Pembayaran</h4>
    <ol>
      <li>Masukkan kartu ATM dan PIN Anda</li>
      <li>Pilih menu Transaksi Lain, kemudian pilih menu Pembayaran</li>
      <li>Setelah itu klik Menu Lainnya, lalu pilih menu BRIVA</li>
      <li>Masukkan nomor rekening Virtual Account (contoh: 8000812877XXXXX) dan pilih Benar</li>
      <li>Ketika muncul konfirmasi pembayaran, silahkan periksa dan pilih Ya jika sudah benar</li>
      <li>Kirim Bukti Transfer di bawah</li>
    </ol>
  </div>

  <form action="<?= base_url($action) ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?php echo session()->get('id'); ?>" />
    <input type="hidden" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo session()->get('nama'); ?>" />
    <input type="hidden" name="deskripsi" id="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
    <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>" />
    <input type="hidden" name="judul" id="judul" value="<?php echo $data['judul']; ?>" />

    <div class="form-group">
      <label for="buktiPembayaran">Bukti Pembayaran</label>
      <div class="custom-file">
        <input type="file" class="form-control" autocomplete="off" name="buktiPembayaran" id="buktiPembayaran" placeholder="Bukti Pembayaran" value="<?php echo $data['buktiPembayaran']; ?>" />
        <label for="buktiPembayaran" class="custom-file-label">Bukti Pembayaran</label>
      </div>
    </div>

    <div class="d-flex p-2 bd-highlight">
      <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('iklan') ?>">Batal</a>
        <button class="btn btn-sm btn-primary" type="submit">Bayar</button>
      </div>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>