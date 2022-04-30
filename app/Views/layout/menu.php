<?= $this->extend('layout/main') ?>

<?= $this->section('menu') ?>
<li class="nav-item">
    <a href="<?= site_url() ?>home" class="nav-link">
        <i class="nav-icon fa fa-home"></i>
        <p>
            Home
        </p>
    </a>
</li>
<li class="nav-header">Master</li>
<?php if (!in_groups('operator')) : ?>
    <li class="nav-item">
        <a href="<?= site_url('departement') ?>" class="nav-link">
            <i class="nav-icon fa fa-tasks"></i>
            <p>
                Departement
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?= site_url('jabatan') ?>" class="nav-link">
            <i class="nav-icon fa fa-tasks"></i>
            <p>
                Jabatan
            </p>
        </a>
    </li>
<?php endif; ?>
<li class="nav-item">
    <a href="<?= site_url('karyawan') ?>" class="nav-link">
        <i class="nav-icon fa fa-table"></i>
        <p>
            Karyawan
        </p>
    </a>
</li>
<?= $this->endSection(); ?>