<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $head_title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/adminlte.min.css">

    <!-- jQuery -->
    <script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.css') ?>">
    <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.all.min.js') ?>"></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url(); ?>/assets/img/logo_jss.png" alt="JSS Logo" height="100" width="100">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <?php if (in_groups('superadmin')) : ?>
                    <li class="nav-item">
                        <a href="<?= site_url(); ?>superadmin" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url(); ?>admin" class="nav-link">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url(); ?>operator" class="nav-link">Operator</a>
                    </li>
                <?php elseif (in_groups('admin')) : ?>
                    <li class="nav-item">
                        <a href="<?= site_url(); ?>admin" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url(); ?>operator" class="nav-link">Operator</a>
                    </li>
                <?php elseif (in_groups('operator')) : ?>
                    <li class="nav-item">
                        <a href="<?= site_url(); ?>operator" class="nav-link">Home</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="<?= site_url(); ?>pimpinan" class="nav-link">Pimpinan</a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url(); ?>user" class="nav-link">User</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->

                <li>
                    <?php if (logged_in()) : ?>
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="window.location='/logout'">Logout</button>
                    <?php else : ?>
                        <a type="button" class="btn btn-outline-info btn-sm" onclick="window.location='/login'">Login</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= site_url(); ?>home" class="brand-link">
                <img src="<?= base_url(); ?>/assets/img/logo_jss.png" alt="JSS Logo" class="brand-image " style="opacity: .8">
                <span class="brand-text font-weight-light"><?= $brand; ?></span>
            </a>


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <?php if (user()->foto  == 'default.png') : ?>
                        <div class="image">
                            <img src="<?= base_url(); ?>/assets/img/default.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                    <?php else : ?>
                        <div class="image">
                            <img src="<?= base_url(); ?>/<?= user()->foto; ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                    <?php endif; ?>
                    <div class="info">
                        <a href="/user/<?= user()->id; ?>" class="d-block"><?= user()->full_name; ?></a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <?= $this->renderSection('menu') ?>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col">
                            <h4>
                                <?= $this->renderSection('judul') ?>
                            </h4>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <?= $this->renderSection('content') ?>

                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright<i class="fas fa-copyright    "> <?= date('Y'); ?> JSS Online </i> All Right Reserved</strong>

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets') ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?= base_url('assets') ?>/dist/js/demo.js"></script> -->
</body>

</html>