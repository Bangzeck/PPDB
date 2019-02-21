<div class="panel panel-default ">
    <div class="panel-heading">
        <a href="<?php echo base_url();?>admin/registrasi/view_code/"><button class="btn btn-info pull-right">Lihat Semua Kode
                Formulir</button></a>
        <h4 style="font-family:roboto; font-weight:bold">REGISTRASI</h4>


    </div>

    <div class="panel-body">


        <table class="table table-striped table-bordered data">
            <thead style="font-family:roboto">
                <tr>
                    <th>Nisn</th>
                    <th>Nomor Rekening Pengirim</th>
                    <th>Nama Pengirim</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrasi as $s): ?>
                <tr>
                    <td width="140">
                        <?php echo $s->nisn ?>
                    </td>
                    <td>
                        <?php echo $s->nomor_registrasi?>
                    </td>
                    <td>
                        <?php echo $s->nama_pengirim ?>
                    </td>
                    <td>
                        <?php echo $s->email ?>
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