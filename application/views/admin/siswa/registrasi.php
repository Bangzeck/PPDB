<div class="panel panel-default ">
    <div class="panel-heading">

        <a href="<?php echo base_url();?>admin/registrasi"><button class="btn btn-info pull-right">Semua
                Registrasi</button></a>

        <a href="<?php echo base_url();?>admin/registrasi/getNonAktif/"><button style="margin-right: 15px;"
                class="btn btn-danger pull-right">Registrasi Tidak Aktif</button></a>

        <a href="<?php echo base_url();?>admin/registrasi/getAktif/"><button style="margin-right: 15px;"
                class="btn btn-success pull-right">Registrasi Aktif</button></a>

        <h4 style="font-family:roboto; font-weight:bold">REGISTRASI</h4>





    </div>

    <div class="panel-body">


        <table class="table table-striped table-bordered data">
            <thead style="font-family:roboto">
                <tr>
                    <th>Tanggal Registrasi</th>
                    <th>Nisn</th>
                    <th>Nomor Rekening Pengirim</th>
                    <th>Nama Pengirim</th>
                    <th>E-mail</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrasi as $s): ?>
                <tr>
                    <td>
                        <?php echo $s->tanggal_registrasi?>
                    </td>
                    <td width="120">
                        <?php echo $s->nisn ?>
                    </td>
                    <td>
                        <?php echo $s->nomor_rekening?>
                    </td>
                    <td>
                        <?php echo $s->nama_pengirim ?>
                    </td>
                    <td>
                        <?php echo $s->email ?>
                    </td>
                    <td>
                        <?php if ($s->status != 0) {
                            echo "Aktif";
                        }else if($s->status != 1){
                            echo "Tidak Aktif";
                        }else{
                            echo "Empty";
                        }?>
                    </td>
                    <td width="50">
                        <a href="<?php echo base_url();?>admin/registrasi/detail/<?php echo $s->id ?>"><button
                                type="button" style="font-family:roboto" class="btn btn-primary">
                                Detail</button></a>
                    </td>
                </tr>
                <?php endforeach; ?>


            </tbody>
        </table>
    </div>

</div><br><br><br><br>

<script type="text/javascript">
$(document).ready(function() {
    $('.data').DataTable();
});
</script>