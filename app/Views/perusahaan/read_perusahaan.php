<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-6 mb-3">
        <h2 class="h4"><?= $data['nama'] ?></h2>
        <span class="text-muted"><?= $data['alamat'] ?></span>
        <p class="my-3"><?= $data['deskripsi'] ?></p>
        <span>Contact : <?= $data['email'] ?></span>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-danger mb-3">Lowongan di <?= $data['nama'] ?> </h4>

                <?php
                if (empty($iklan))
                    echo "<span class='card-subtitle text-muted mb-1'>Tidak ada lowongan</span>";
                else {
                    foreach ($iklan as $value) :
                ?>
                        <a href="
                            <?php
                            if (session()->get('role') == 'Admin') echo '#';
                            else if (session()->get('role') == 'Perusahaan') echo base_url('iklan/read/' . $value['id']);
                            else echo base_url('lamaran/create/' . $value['id'])
                            ?>">
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
                        <hr>
                <?php
                    endforeach;
                } ?>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>