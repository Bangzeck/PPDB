<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('admin'); ?>"><i class="fa fa-home fa-fw"></i> PPDB
                    Admin Panel</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Hi Admin <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo base_url('admin/user'); ?>"><i class="fa fa-user fa-fw"></i> User
                                Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/setting'); ?>"><i class="fa fa-gear fa-fw"></i>
                                Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#logoutModal"
                                class="fa fa-sign-out fa-fw">Logout</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url('admin'); ?>" class="active"><i
                                    class="fa fa-dashboard fa-fw"></i> &nbsp
                                Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/registrasi/getNonAktif'); ?>"><i
                                    class="fa fa-edit fa-fw"></i> &nbsp Registrasi</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>  &nbsp Data Calon
                                Siswa <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>admin/siswa">&nbsp &nbsp List Calon Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/siswa/add">&nbsp &nbsp Tambah Calon Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/siswa/diterima">&nbsp &nbsp Diterima</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/siswa/ditolak">&nbsp &nbsp Ditolak</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/berita'); ?>"><i class="fa fa-edit fa-fw"></i> &nbsp Berita</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/email'); ?>"><i
                                    class="fa fa-envelope fa-fw"></i> &nbsp Email</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <br>