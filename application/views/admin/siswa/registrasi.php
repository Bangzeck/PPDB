<div class="panel panel-default ">
    <div class="panel-heading">

        <h4 style="font-family:roboto; font-weight:bold">REGISTRASI</h4>
    </div>

    <div class="panel-body">


        <table class="table table-striped table-bordered data">
            <thead style="font-family:roboto">
                <tr>
                    <th>Nisn</th>
                    <th>Nomor Registrasi</th>
                    <th>Gambar</th>
                    <th>E-mail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrasi as $s): ?>
                <tr>
                    <td width="160">
                        <?php echo $s->nisn ?>
                    </td>
                    <td>
                        <?php echo $s->nomor_registrasi ?>
                    </td>
                    <td>
                        <?php echo $s->gambar?>
                    </td>
                    <td>
                        <?php echo $s->email ?>
                    </td>

                    <td>
                        <a href="<?php echo base_url();?>admin/registrasi/detail/<?php echo $s->id ?>"><button
                                type="button" style="font-family:roboto" class="btn btn-primary">lihat
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