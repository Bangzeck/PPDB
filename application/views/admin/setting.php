<div class="panel panel-default ">
    <div class="panel-heading">

        <h4 style="font-family:roboto; text-align:center; font-weight:bold">SETTING</h4>
    </div>

    <?php foreach($setting as $s): ?>

    <div class="col-lg-6"><br><br>


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

                            <label class="control-label">Daftar</label>
                            <select style="height:35px" class="form-control" name="daftar" id="pengumuman">
                                <option value="<?php echo $s->daftar ?>"><?php echo $s->daftar ?></option>
                                <option value="Buka">Buka</option>
                                <option value="Tutup" placeholder="Tutup">Tutup</option>
                            </select>
                        </div><br>

                        <div>
                            <button class="btn btn-primary col-md-2 pull-right">Update</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
    <?php endforeach; ?>


    <?php foreach($sekolah as $sk): ?>
    <div class="col-lg-6"><br><br>


        <div class="panel panel-default">
            <div class="panel-heading">
                Masukan Data/Identitas Sekolah
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <form role="form" method="post" action="<?php echo base_url('admin/setting/editSekolah'); ?>">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody>
                                <td>Nama Sekolah</td>
                                <td>
                                    <input class="form-control" type="text" name="nama" id="nama"
                                        value="<?php echo $sk->nama ?>" required="">
                                </td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekolah</td>
                                    <td>
                                        <textarea class="form-control" type="text" name="alamat"
                                            id="alamat_sekolah" required=""><?php echo $sk->alamat ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tlp/Hp Sekolah</td>
                                    <td>
                                        <input class="form-control" type="text" name="nomor"
                                            id="nomor" value="<?php echo $sk->nomor ?>"
                                            onkeypress="return Angkasaja(event)" required="" minwidth="12"
                                            maxwidth="13" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input class="form-control" type="text" name="email"
                                            id="email" value="<?php echo $sk->email ?>" required="" />
                                    </td>
                                </tr>
                            </tbody>
                        </table><button type="submit" class="btn btn-primary pull-right" name="update"
                            id="update">Update</button>
                    </form>

                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>

</div>


<?php endforeach; ?>