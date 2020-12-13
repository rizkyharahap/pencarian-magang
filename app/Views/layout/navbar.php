<nav class="navbar navbar-expand-lg navbar-dark
  <?php
  if (session()->get('role') ==  'Admin') echo 'bg-danger';
  else if (session()->get('role') ==  'Perusahaan') echo 'bg-primary';
  else echo 'bg-warning';
  ?>">
  <div class="container">
    <a class="navbar-brand" href="
      <?php
      if (session()->get('role') ==  'Admin' ) echo (base_url() . '/iklan/admin');
      else if (session()->get('role') ==  'Perusahaan') echo (base_url() . '/iklan');
      else echo (base_url() . '/home');
      ?>">
      <h1 class="text-uppercase font-weight-bold h2 m-0">
        <?php
        if (session()->get('role') ==  'Admin' || session()->get('role') ==  'Perusahaan') echo 'Dashboard';
        else echo 'Magang';
        ?>
      </h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">

        <?php
        if (session()->get('role') == 'Admin') { ?>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url() . '/iklan/admin' ?>">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url() . '/perusahaan/admin' ?>">Perusahaan</a>
          </li>

        <?php } else if (session()->get('role') == 'Perusahaan') { ?>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url() . '/iklan' ?>">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url() . '/perusahaan/read/' . session()->get('id') ?>">Profile</a>
          </li>

        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url() . '/home' ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url() . '/perusahaan' ?>">Perusahaan</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <?php if (session('email') != null) { ?>
            <a class="nav-link active" href="<?= base_url() . '/user/logout' ?>">Logout</a>
          <?php } else { ?>
            <a class="nav-link active" href="<?= base_url() . '/user/login' ?>">Login</a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>