<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $icon; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $nama_user ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU UTAMA</li>
            <li class="<?php echo ($this->uri->segment(1) == 'dashboard' ) ? 'active' : ''; ?>">
                <a href="<?php echo site_url('dashboard') ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="<?php echo ($this->uri->segment(1) == 'keuangan' ) ? 'active' : ''; ?>">
                <a href="<?php echo site_url('keuangan') ?>">
                    <i class="fa fa-book"></i> <span>keuangan</span>
                </a>
            </li>
            <li class="treeview <?php echo ($this->uri->segment(2) == 'keuangan' ) ? 'active open' : '' ; ?>">
                <a href="#">
                    <i class="fa fa-file-o"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">                    
                    <li class="<?php echo ($this->uri->segment(2) == 'keuangan') ? 'active' : ''; ?>"><a href="<?php echo site_url('laporan/keuangan') ?>"><i class="fa fa-circle-o "></i> Laporan keuangan</a></li>
                </ul>
            </li>
        </ul>
        
    </section>
    <!-- /.sidebar -->
</aside>
