<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-8 mb-3">
        <h2 class="h4"><?= $kandidat['nama'] ?></h2>
        <span class="text-muted"><?= $kandidat['alamat'] ?></span>
        <p class="my-3"><?= $kandidat['deskripsi'] ?></p>
        <span>Contact : <?= $kandidat['email'] ?></span>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title text-danger mb-3">Berkas Lamaran <?= $kandidat['nama'] ?> </h4>
                <?php
                if (empty($lamaran))
                    echo "<span class='card-subtitle text-muted mb-1'>Tidak ada lamaran</span>";
                else { ?>
                    <a href="<?= base_url('file/' . $lamaran['berkas']) ?>" target="_blank">
                        <i class=" fas fa-file-alt mx-2" style="font-size: 5rem;"></i>
                        <span class="d-block"><?= $lamaran['berkas'] ?></span>
                    </a>
                    <hr>
                <?php } ?>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>