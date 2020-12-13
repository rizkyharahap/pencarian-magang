<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card p-3 mx-auto" style="max-width: 500px;">
    <h2 class="text-center"><?= $content ?></h2>

    <form action="<?= base_url($action) ?>" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" />
            <small id="emailHelp" class="form-text text-muted">Masukan berupa email</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="Kandidat">Kandidat</option>
                <option value="Perusahaan">Perusahaan</option>
            </select>
            <small id="roleHelp" class="form-text text-muted">- Kandidat untuk pencari magang</small>
            <small id="roleHelp" class="form-text text-muted">- Perusahaan untuk mengiklankan lowongan magang</small>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="emailHelp" />
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" aria-describedby="emailHelp" />
        </div>

        <button type="submit" class="btn btn-info" style="width: 100%;">Register</button>
        <div class="my-2 text-center text-muted">
            <small>Sudah punya akun ?</small>
        </div>
        <a class="btn btn-danger" style="width: 100%;" href="<?= base_url() . '/user/login' ?>">Login</a>
    </form>
</div>

<?= $this->endSection(); ?>