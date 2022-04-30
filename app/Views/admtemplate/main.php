<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $head_title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= base_url(); ?>/assets/img/logo_jss.png" alt="JSS Logo" height="100" width="100">
        </div>

        <!-- Navbar -->
        <?= $this->renderSection('navbar'); ?>
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
            <ul class="navbar-nav fixed ml-auto">
                <li>
                    <?php if (logged_in()) : ?>
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="window.location='<?= site_url(); ?>logout'">Logout</button>
                    <?php else : ?>
                        <a type="button" class="btn btn-outline-info btn-sm" onclick="window.location='<?= site_url(); ?>login'">Login</a>
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
        <?= $this->renderSection('menu'); ?>


        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content'); ?>

        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <?= $this->renderSection('div-model'); ?>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; Jss Online <?= date('Y'); ?> Powered By : <a href="https://akangtuser.github.io" target="blank">Akang Tuser</a>. All rights reserved.</strong>

            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?= $this->renderSection('script-js'); ?>
    <!-- jQuery -->
    <script src="<?= base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url(); ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/assets/dist/js/adminlte.js"></script>

    <!-- PAGE //assets/plugins -->
    <!-- jQuery Mapael -->
    <script src="<?= base_url(); ?>/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url(); ?>/assets/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url(); ?>/assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url(); ?>/assets/dist/js/pages/dashboard2.js"></script>


</body>

</html>