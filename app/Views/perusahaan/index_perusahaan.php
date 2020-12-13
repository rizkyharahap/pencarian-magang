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
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-body">
                    <a href="<?= base_url('perusahaan/read/' . $value['id']) ?>">
                        <h2 class="card-title h5 mb-1"><?= $value['nama'] ?></h2>
                    </a>
                    <small class="card-subtitle text-muted"><?= $value['alamat'] ?></small>
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

                            echo $string;
                        ?>
                            <a href="<?= base_url('perusahaan/read/' . $value['id']) ?>">Read More</a>';
                        <?php } else
                            echo $string; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- pagination -->
<div class="d-flex justify-content-center my-3">
    <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
<?= $this->endSection(); ?>