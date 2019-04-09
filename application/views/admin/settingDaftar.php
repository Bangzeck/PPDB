<div class="panel panel-default ">
    <div class="panel-heading">
        <h4 style="font-family:roboto; text-align:center; font-weight:bold">SETTING PAGE DAFTAR</h4>
    </div>

    <?php foreach($pageDaftar as $p): ?>


    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <form role="form" method="post" action="<?php echo base_url('admin/setting/editSekolah'); ?>">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td width="200">Gambar Alur Pendaftaran</td>
                                <td>
                                    <img src="<?php echo base_url()?>upload/alur/<?php echo $p->gambar ?>"
                                        width="500"><br><br>
                                    <input type="file" name="gambar" required="">
                                    <small>Ukuran gambar normal </small>
                                </td>
                            </tr>
                            <tr>
                                <td>Nomor Rekening</td>
                                <td>
                                    <textarea class="form-control" type="text" name="nomor_rekening" id="nomor_rekening"
                                        required=""><?php echo $p->nomor_rekening ?></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td>Nama Rekening</td>
                                <td>
                                    <textarea class="form-control" type="text" name="nama_rekening" id="nama_rekening"
                                        required=""><?php echo $p->nama_rekening ?></textarea>
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


<?php endforeach; ?>