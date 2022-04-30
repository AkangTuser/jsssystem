<?= $this->extend('guest/template/index'); ?>

<?= $this->section('guest_content'); ?>
<!-- Begin Page Content -->

<div class="container">
    <!-- <div class="container-fluid"> -->
    <!-- Outer Row -->

    <!-- Page Heading -->
    <!-- Image and text -->

    <div class=" card col-lg-6 mx-auto text-center mt-5">
        <a href="
        <?php if (in_groups('superadmin')) : ?>
            <?= site_url(); ?>superadmin
        <?php elseif (in_groups('admin')) : ?>
            <?= site_url(); ?>admin
        <?php elseif (in_groups('karyawan')) : ?>
            <?= site_url(); ?>karyawan
        <?php elseif (in_groups('pimpinan')) : ?>
            <?= site_url(); ?>pimpinan
        <?php elseif (in_groups('operator')) : ?>
            <?= site_url(); ?>operator
        <?php elseif (in_groups('guest')) : ?>
            <?= site_url(); ?>user
        <?php else : ?>
            <?= site_url(); ?>login            
        <?php endif; ?>
        "> <img src="<?= base_url(); ?>/assets/img/logo_jss.png" class="img-fluid rounded mx-auto d-block mt-4" alt="Jhonlin Security Service"></a>
        <h1 class="h3 mb-4 text-gray-800"><?= $welcome; ?></h1>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>