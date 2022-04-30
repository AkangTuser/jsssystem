<?= $this->extend('admtemplate/main'); ?>

<?= $this->section('menu'); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url(); ?>home" class="brand-link">
        <img src="<?= base_url(); ?>/assets/img/logo_jss.png" alt="JSS Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-light text-danger"><?= $brand; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
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
                <a href="<?= site_url(); ?>user/<?= user()->id; ?>" class="d-block"><?= user()->full_name; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if (in_groups('superadmin')) : ?>
                    <div class="user-panel pb-3 mb-3">
                        <li class="nav-header text-info">SUPER ADMIN</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Menu Super Admin
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url(); ?>group" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Permision</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </div>

                    <div class="user-panel pb-3 mb-3">
                        <li class="nav-header text-info">MANAJEMEN MENU</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Menu Utama
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Super Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manajemen Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manajement Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Extra</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </div>
                <?php endif; ?>

                <div class="user-panel pb-3 mb-3">
                    <li class="nav-header text-info">MANAJEMEN DATA</li>
                    <li class="nav-item">
                        <a href="<?= site_url(); ?>karyawan" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Data Karyawan</p>
                        </a>
                    </li>
                </div>

                <div class="user-panel pb-3 mb-3">
                    <li class="nav-header text-info">EXTRA</li>
                    <li class="nav-item">
                        <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>
                                Calendar
                                <span class="badge badge-info right">2</span>
                            </p>
                        </a>
                    </li>
                </div>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?= $this->endSection(); ?>