<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">SMK Bina Unggul</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> Hi Admin <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="<?php echo base_url('admin/setting'); ?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#logoutModal" class="fa fa-sign-out fa-fw">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?php echo base_url('admin'); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i>
                        Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/registrasi'); ?>"><i class="fa fa-edit fa-fw"></i>Registrasi</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Data Siswa <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url();?>admin/siswa">List Semua Siswa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/siswa/add">Tambah Siswa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/siswa/diterima">Diterima</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/siswa/ditolak">Ditolak</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/siswa/belom_verifikasi">Belom Verifikasi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/pengumuman'); ?>"><i class="fa fa-edit fa-fw"></i>Pengumuman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>