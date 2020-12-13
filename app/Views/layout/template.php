<?= $this->include('layout/header'); ?>
<?= $this->include('layout/navbar'); ?>

<!-- main -->
<main role="main" class="container my-5">
  <div class="content">

    <?= $this->renderSection('content') ?>

  </div>
</main>
<!-- end main -->

<?= $this->include('layout/footer'); ?>