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


<?php
if (empty($data))
    echo "<span class='card-subtitle text-muted mb-1'>Tidak ada lowongan</span>";
else {
    foreach ($data as $value) : ?>
        <td width="80px"><?php $start = 0;
                            echo ++$start ?></td>
        <td><?= $value['id_kandidat'] ?></td>
        <td><?= $value['id_iklan'] ?></td>
        <td><?= $value['nama'] ?></td>
        <td><?= $value['email'] ?></td>
        <td><?= $value['berkas'] ?></td>
        <td>
            <span class="float-right">
                <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('lamaran/read/' . $value['id']) ?>">READ</a>
                <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('lamaran/update/' . $value['id']) ?>">EDITE</a>
                <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('lamaran/delete/' . $value['id']) ?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')">DELETE</a>
            </span>
        </td>
<?php endforeach;
} ?>
<!-- pagination -->
<div class="d-flex justify-content-center my-3">
    <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
<?= $this->endSection(); ?>