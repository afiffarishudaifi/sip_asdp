<?php
$uri = service('uri');
$session = session();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Admin/Dashboard'); ?>" class="brand-link">
        <img src="<?= base_url() ?>/docs/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIP ASDP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/docs/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $session->get('nama_login'); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="<?= base_url('Admin/Dashboard'); ?>" class="nav-link <?php
                            if ($uri->getSegment(2) == 'Dashboard') {
                                echo "active";
                            } ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MASTER DATA</li>
                <li class="nav-item">
                    <a href="#" class="nav-link <?php
                            if (
                                $uri->getSegment(2) == 'User' || $uri->getSegment(2) == 'Kapal'
                            ) {
                                echo "active";
                            } ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Admin/Kapal'); ?>" class="nav-link <?php
                            if ($uri->getSegment(2) == 'Kapal') {
                                echo "active";
                            } ?>">
                                <i class="fa fa-ship nav-icon"></i>
                                <p>Kapal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Admin/User'); ?>" class="nav-link <?php
                            if ($uri->getSegment(2) == 'User') {
                                echo "active";
                            } ?>">
                                <i class="fa fa-user nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">FORM JASA SANDAR</li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/JasaSandar') ?>" class="nav-link <?php
                            if (
                                $uri->getSegment(2) == 'JasaSandar'
                            ) {
                                echo "active";
                            } ?>">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Jasa Sandar
                        </p>
                    </a>
                </li>
                <li class="nav-header">LAPORAN</li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/LaporanJasaSandar') ?>" class="nav-link <?php
                            if (
                                $uri->getSegment(2) == 'LaporanJasaSandar'
                            ) {
                                echo "active";
                            } ?>">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
