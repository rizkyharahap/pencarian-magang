<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="mb-5">
    <h1><?= $content; ?></h1>
</div>

<?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-info" role="alert">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
        <tr>
    </thead>
    <?php
    $start = 0;
    foreach ($data as $value) : ?>
        <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><a href="<?= base_url('perusahaan/read/' . $value['id']) ?>"><?= $value['nama'] ?></a></td>
            <td><?= $value['email'] ?></td>
            <td><?= $value['alamat'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<!-- pagination -->
<!-- pagination -->
<div class="d-flex justify-content-center my-3">
    <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
<?= $this->endSection(); ?>