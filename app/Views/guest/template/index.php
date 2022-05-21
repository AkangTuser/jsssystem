<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $head_title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= site_url(); ?>">JSS Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url(); ?>home/karyawan">Karyawan <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url(); ?>home/contact">Contact <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-md-auto">
        <?php if (!logged_in()) : ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url(); ?>login">Login <span class="sr-only">(current)</span></a>
            <!-- <a class="nav-link" href="/logout">Logout <span class="sr-only">(current)</span></a> -->

          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url(); ?>register">Register</a>
          </li>
        <?php else : ?>
          <li class="nav-item active">
            <!-- <a class="nav-link" href="/user">Login <span class="sr-only">(current)</span></a> -->
            <a class="nav-link" href="<?= site_url(); ?>logout">Logout <span class="sr-only">(current)</span></a>

          </li>
          <!-- <li class="nav-item active">
              <a class="nav-link" href="/register">Register</a>
            </li> -->
        <?php endif ?>
      </ul>
    </div>
  </nav>

  <?= $this->renderSection('guest_content'); ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>