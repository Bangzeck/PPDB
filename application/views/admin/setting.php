<div class="panel panel-default ">
    <div class="panel-heading">
        <h4 style="font-family:roboto; text-align:center; font-weight:bold">SETTING</h4>
    </div>

    <div class="col-lg-6"><br><br>
        <?php foreach($setting as $s): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Atur aktif dan non aktif pengumuman dan daftar
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <form role="form" method="post" action="<?php echo base_url('admin/setting/editPengumuman'); ?>">
                        <div>

                            <label class="control-label">Pengumuman</label>
                            <select style="height:35px" class="form-control" name="pengumuman" id="pengumuman">
                                <option value="<?php echo $s->pengumuman ?>"><?php echo $s->pengumuman ?></option>
                                <option value="Buka">Buka</option>
                                <option value="Tutup">Tutup</option>
                            </select><br>

                            <label class="control-label">Daftar dan Registrasi</label>
                            <select style="height:35px" class="form-control" name="daftar" id="pengumuman">
                                <option value="<?php echo $s->daftar ?>"><?php echo $s->daftar ?></option>
                                <option value="Buka">Buka</option>
                                <option value="Tutup" placeholder="Tutup">Tutup</option>
                            </select>
                        </div><br>
                        <p style="text-align:center; font-weight:bold; color:green">
                            <?php echo $this->session->flashdata('pengumuman');?></p>
                        <div>
                            <button class="btn btn-primary col-md-2 pull-right">Update</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <?php endforeach; ?>

        <?php foreach($setting as $s): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Setting Tampilan Utama
            </div>

            <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <a href="<?php echo base_url("admin/alumni")?>" class="btn btn-success">Setting Home
                            Alumni</a>
                        <a href="<?php echo base_url("admin/maps")?>" class="btn btn-success">Setting Home Maps</a>
                        <a href="<?php echo base_url("admin/setting/editPageDaftar")?>" class="btn btn-success">Setting Page
                            Daftar</a>
                    </div>
                    <div class="row" style="margin-top: 10px;">

                    </div>
                </div>


            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php foreach($sekolah as $sk): ?>
    <div class="col-lg-6"><br><br>

        <div class="panel panel-default">
            <div class="panel-heading">
                Setting Tampulan Utama
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <form role="form" method="post" action="<?php echo base_url('admin/setting/editSekolah'); ?>">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama Sekolah</td>
                                    <td>
                                        <input class="form-control" type="text" name="nama" id="nama"
                                            value="<?php echo $sk->nama ?>" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengumuman</td>
                                    <td>
                                        <textarea class="form-control" type="text" name="pengumuman" id="pengumuman"
                                            required=""><?php echo $sk->pengumuman ?></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Alamat Sekolah</td>
                                    <td>
                                        <textarea class="form-control" type="text" name="alamat" id="alamat_sekolah"
                                            required=""><?php echo $sk->alamat ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tlp/Hp Sekolah</td>
                                    <td>
                                        <input class="form-control" type="text" name="nomor" id="nomor"
                                            value="<?php echo $sk->nomor ?>" onkeypress="return Angkasaja(event)"
                                            required="" minwidth="12" maxwidth="13" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input class="form-control" type="text" name="email" id="email"
                                            value="<?php echo $sk->email ?>" required="" />
                                    </td>
                                </tr>
                            </tbody>
                        </table><button type="submit" class="btn btn-primary pull-right" name="update"
                            id="update">Update</button>
                    </form>
                    <p style="text-align:center; font-weight:bold; color:green">
                        <?php echo $this->session->flashdata('sekolah');?></p>
                </div>
                <!-- /.table-responsive -->
            </div>

        </div>
        <!-- /.panel -->
    </div>
</div>


<?php endforeach; ?>