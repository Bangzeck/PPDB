
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahSiswa ?></div>
                                        <div>Jumalah Siswa</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/siswa">
                                <div class="panel">
                                    <span class="pull-left">Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahDiterima ?></div>
                                        <div>Jumalah Diterima</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/siswa/diterima">
                                <div class="panel">
                                    <span class="pull-left">Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jumlahDitolak ?></div>
                                        <div>Ditolak</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/siswa/ditolak">
                                <div class="panel">
                                    <span class="pull-left">Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $jumlahVerifkasi ?></div>
                                        <div>Belom Verifikasi</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>admin/siswa/belom_verifikasi">
                                <div class="panel">
                                    <span class="pull-left">Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>