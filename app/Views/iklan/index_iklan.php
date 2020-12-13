<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="mb-5">
    <h2><?= $content; ?></h2>
    <a href="<?= base_url('iklan/create') ?>" class="btn btn-sm btn-primary float-right">
        <i class="fas fa-plus"></i> Tambah Iklan
    </a>
</div>

<?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-info" role="alert">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>


<?php
if (empty($iklan))
    echo "<span class='card-subtitle text-muted mb-1'>Tidak ada iklan</span>";
else {
    foreach ($iklan as $value) : ?>
        <a href="<?= base_url('iklan/read/' . $value['id']) ?>">
            <h2 class="card-title h5 mb-1"><?= $value['judul'] ?></h2>
        </a>
        <small class="card-subtitle text-muted">
            <?php
            $uploadDate = new DateTime($value['tanggal']);
            $dateNow = new DateTime();
            echo $dateNow->diff($uploadDate)->format("%a");
            ?>
            hari yang lalu
        </small>
        <p class="card-text">
            <?php
            $string = strip_tags($value['deskripsi']);
            if (strlen($string) > 240) {

                // truncate string
                $stringCut = substr($string, 0, 240);
                $endPoint = strrpos($stringCut, ' ');

                //if the string doesn't contain any space then it will cut without word basis.
                $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                $string .= '...';
            }
            echo $string;
            ?>
        </p>

        <div class="row">
            <div class="col-6">
                <?php
                if ($value['status_pembayaran'] == "Belum Bayar") {
                ?>
                    <a href="<?= base_url('iklan/pembayaran/' . $value['id']) ?>" class="btn btn-sm btn-outline-danger">Belum Bayar </a>
                <?php
                } else { ?>
                    <a href="<?= base_url('iklan/read/' . $value['id']) ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-file-alt"></i> Lamaran Masuk
                        <?php
                        if (empty($lamaran))
                            echo 0;
                        else {
                            $count = 0;
                            foreach ($lamaran as $lamaranValue) {
                                if ($lamaranValue['id_iklan'] == $value['id'])
                                    $count += 1;
                            }
                            echo $count;
                        }
                        ?>
                    </a>
                <?php } ?>
            </div>
            <div class="col-6 text-right">
                <a href="<?= base_url('iklan/update/' . $value['id']) ?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-pencil-alt"></i> Edit
                </a>
                <a href="<?= base_url('iklan/delete/' . $value['id']) ?>" class="btn btn-sm btn-danger" onclick="javascript: return confirm('Delete \nAre You Sure ?')">
                    <i class="fas fa-trash-alt"></i> Hapus
                </a>
            </div>
        </div>
        <hr>
<?php endforeach;
} ?>

<!-- pagination -->
<div class="d-flex justify-content-center my-3">
    <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
<?= $this->endSection(); ?>