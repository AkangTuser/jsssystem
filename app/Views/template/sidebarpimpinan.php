        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url(); ?>home">
                <div class="sidebar-brand-icon">
                    <img src="/favicon.ico" style="width: 70%;" alt="Logo JSS"></img>
                </div>
                <div class="sidebar-brand-text mx-3">JSS ONLINE</div>
            </a>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - My Profile -->
            <li class="nav-item mb-3">
                <a class="nav-link" href="/user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item mb-3">
                <a class="nav-link" href="<?= site_url(); ?>guest/edit/<?= $id = user()->id ?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Edit Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Lampiran -->
            <li class="nav-item mb-3">
                <a class="nav-link" href="<?= site_url(); ?>user/<?= user()->employee_id; ?>/show">
                    <i class="fas fa-fw fa-file"></i>
                    <span>My Data</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - My Profile -->
            <li class="nav-item mb-3">
                <a class="nav-link" href="/pimpinan">
                    <i class="fas fa-fw fa-user"></i>
                    <span>List Karyawan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Logout -->
            <li class="nav-item mb-3">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>

            </div>

        </ul>
        <!-- End of Sidebar -->