<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="card p-3 mx-auto" style="max-width: 700px;">
    <h2><?= $content ?></h2>
    <form action="<?= base_url($action) ?>" method="post">
        <input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?php echo session()->get('id'); ?>" />
        <input type="hidden" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo session()->get('nama'); ?>" />

        <div class="form-group">
            <label for="varchar">Judul</label>
            <input type="text" class="form-control" autocomplete="off" name="judul" id="judul" placeholder="Judul" value="<?php echo $data['judul']; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Deskripsi</label>
            <textarea class="form-control" autocomplete="off" name="deskripsi" id="deskripsi" placeholder="Deskripsi" rows="5"> <?php echo $data['deskripsi']; ?></textarea>
        </div>
        <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>">

        <div class="d-flex p-2 bd-highlight">
            <div class="form-group">
                <a class="btn btn-sm btn-danger" href="<?= base_url('iklan') ?>">Cencel</a>
                <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>