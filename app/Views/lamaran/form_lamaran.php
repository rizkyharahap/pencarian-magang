<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-7">
        <h2 class="h4"><?= $data['judul'] ?></h2>
        <a href="<?= base_url('perusahaan/read/' . $data['id_perusahaan']) ?>" class="text-decoration-none h5"><?= $data['nama_perusahaan'] ?></a>
        <br>
        <small class="text-muted">
            <?php
            $date = date_create($data['tanggal']);
            echo date_format($date, "l, d-F-Y"); ?>
        </small>
        <p class="my-3"><?= $data['deskripsi'] ?></p>
    </div>

    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-danger mb-3">Lamar Sekarang</h4>

                <?php if (!empty(session()->getFlashdata('error_form'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h5>Periksa Entrian Form</h5>
                        </hr />
                        <?php echo session()->getFlashdata('error_form'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url($action) ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_kandidat" id="id_kandidat" value="<?= session()->get('id'); ?>" />
                    <input type="hidden" name="id_iklan" id="id_iklan" value="<?= $data['id']; ?>" />

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" autocomplete="off" name="nama" id="nama" placeholder="Nama" value="<?= session()->get('nama'); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" autocomplete="off" name="email" id="email" placeholder="Email" value="<?= session()->get('email'); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="berkas">Berkas</label>
                        <div class="custom-file">
                            <input type="file" class="form-control" autocomplete="off" name="berkas" id="berkas" placeholder="Berkas" value="<?php echo $data['berkas']; ?>" />
                            <label for="berkas" class="custom-file-label">Berkas</label>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <a href="<?= base_url() ?>" class="btn btn-warning text-white active" type="reset">Batal</a>
                        <button class="btn btn-primary" type="submit">Lamar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>