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

    <!-- jquery admin lte3-->
    <script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.css') ?>">
    <script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.all.min.js') ?>"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php if (in_groups('superadmin')) : ?>
            <!-- Sidebar -->
            <?= $this->include('template/sidebarpimpinan'); ?>

        <?php elseif (in_groups('admin')) : ?>
            <?= $this->include('template/sidebarpimpinan'); ?>

        <?php elseif (in_groups('operator')) : ?>
            <?= $this->include('template/sidebarpimpinan'); ?>

        <?php elseif (in_groups('pimpinan')) : ?>
            <?= $this->include('template/sidebarpimpinan'); ?>

        <?php else : ?>
            <?= $this->include('template/sidebar'); ?>
            <!-- End of Sidebar -->
        <?php endif; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('template/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('page-content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?= $this->include('template/footer'); ?>