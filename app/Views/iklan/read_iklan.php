<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-6 mb-3">
        <h2 class="h4"><?= $data['judul'] ?></h2>
        <small class="text-muted">
            <?php
            $date = date_create($data['tanggal']);
            echo date_format($date, "l, d-F-Y"); ?>
        </small>
        <p class="my-3"><?= $data['deskripsi'] ?></p>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-danger mb-3">Lamaran Masuk </h4>
                <?php
                if (empty($lamaran))
                    echo "<span class='card-subtitle text-muted mb-1'>Tidak ada lamaran</span>";
                else {
                    foreach ($lamaran as $value) : ?>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="
                                    <?php
                                    if (session()->get('role') == 'Perusahaan') echo base_url('lamaran/read/' . $value['id']);
                                    ?>">
                                    <h2 class="card-title h5 mb-1"><?= $value['nama'] ?></h2>
                                </a>
                                <small class="card-subtitle text-muted"><?= $value['email'] ?></small>
                            </div>
                            <a href="<?= base_url('file/' . $value['berkas']) ?>" target="_blank" class="text-right mx-2">
                                <i class=" fas fa-file-alt" style="font-size: 3.25rem;"></i>
                                <span class="d-block"><?= $value['berkas'] ?></span>
                            </a>
                        </div>
                        <hr>
                <?php endforeach;
                } ?>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>