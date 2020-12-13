<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card p-3 mx-auto" style="max-width: 500px;">
    <h2 class="text-center"><?= $content ?></h2>

    <?php if (!empty(session()->getFlashdata('error_form'))) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h5>Periksa Entrian Form</h5>
            </hr />
            <?php echo session()->getFlashdata('error_form'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>


    <form action="<?= base_url($action) ?>" method="POST">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?= old('email') ?>" />
            <small id="emailHelp" class="form-text text-muted">Masukan berupa email</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?= old('password') ?>">
        </div>
        <button type="submit" class="btn btn-danger" style="width: 100%;">Login</button>
        <div class="my-2 text-center text-muted">
            <small>Belum punya akun ?</small>
        </div>
        <a class="btn btn-info" style="width: 100%;" href="<?= base_url() . '/user/register' ?>">Register</a>
    </form>
</div>

<?= $this->endSection(); ?>