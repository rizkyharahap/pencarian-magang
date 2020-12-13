<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div>
    <h2 class="h3"><?= $content; ?></h2>
</div>

<?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-info" role="alert">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>

<table class="table table-hover">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Judul</th>
            <th>Nama Perusahaan</th>
            <th>Tanggal</th>
            <th class="text-center">Status</th>
            <th class="text-center">Bukti</th>
        </tr>
        <tr>
    </thead>
    <?php
    $income = 0;
    foreach ($iklan as $value) {
        if ($value['status_pembayaran'] == 'Terbayar')
            $income += 20000;
    }
    ?>

    <div class="mb-5">
        <h4 class="text-success">Rp. <?= $income; ?></h4>
    </div>
    <?php
    $start = 0;
    foreach ($iklan as $value) :
        if ($value['status_pembayaran'] == 'Terbayar')
            $income += 20000;
    ?>

        <tr>
            <td class="text-center"><?php echo ++$start ?></td>
            <td><?= $value['judul'] ?></td>
            <td><a href="<?= base_url('perusahaan/read/' . $value['id_perusahaan']) ?>"><?= $value['nama_perusahaan'] ?></a></td>
            <td>
                <?php
                $date = date_create($value['tanggal']);
                echo date_format($date, "d-F-Y"); ?>
            </td>
            <td class="text-center">
                <span class=" text-white px-3 py-1 rounded-pill
                <?php
                if ($value['status_pembayaran'] == 'Terbayar') echo "bg-success";
                else echo "bg-danger";
                ?> ">
                    <?= $value['status_pembayaran'] ?>
                </span>
            </td>
            <td class="text-center">
                <?php if ($value['status_pembayaran'] == 'Terbayar') { ?>
                    <a href=" <?= base_url('bukti_pembayaran/' . $value['bukti_pembayaran']) ?>" target="_blank"><i class="fas fa-file-alt fa-2x"></i></a>
                <?php } ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<!-- pagination -->
<div class=" d-flex justify-content-center my-3">
    <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
<?= $this->endSection(); ?>