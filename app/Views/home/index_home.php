<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="mb-4">
  <h2><?= $content; ?></h2>
</div>

<?php if (session()->getFlashdata('message')) : ?>
  <div class="alert alert-info" role="alert">
    <?= session()->getFlashdata('message') ?>
  </div>
<?php endif; ?>

<div class="row">
  <?php foreach ($data as $value) : ?>
    <div class="col-12 col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title h5 mb-1"><?= $value['judul'] ?></h2>
          <a href="<?= base_url('perusahaan/read/' . $value['id_perusahaan']) ?>" class="d-flex"><?= $value['nama_perusahaan'] ?></a>
          <small class="card-subtitle text-muted">
            <?php
            $uploadDate = new DateTime($value['tanggal']);
            $dateNow = new DateTime();
            echo $dateNow->diff($uploadDate)->format("%a");
            ?> hari yang lalu</small>

          <p class="card-text">
            <?php
            $string = strip_tags($value['deskripsi']);
            if (strlen($string) > 90) {

              // truncate string
              $stringCut = substr($string, 0, 90);
              $endPoint = strrpos($stringCut, ' ');

              //if the string doesn't contain any space then it will cut without word basis.
              $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
              $string .= '...';
            }
            echo $string;
            ?>
          </p>
          <div class="d-flex flex-column align-items-end">
            <a href="<?php
                      if (session()->get('id') == null) echo (base_url('user/login'));
                      else echo (base_url('lamaran/create/' . $value['id']));
                      ?>" class="btn btn-danger w-100">Lihat Lowongan</a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- pagination -->
</div>
<div class="d-flex justify-content-center my-3">
  <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
<?= $this->endSection(); ?>