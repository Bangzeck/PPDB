<div class="panel panel-default ">
    <div class="panel-heading">
        <h4 style="font-family:roboto; font-weight:bold">KODE FORMULIR</h4>
    </div>

    <div class="panel-body">


        <table class="table table-striped table-bordered data">
            <thead style="font-family:roboto">
                <tr>
                    <th>ID</th>
                    <th>NISN / Kode</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($code as $c): ?>
                <tr>
                    <td width="10">
                        <?php echo $c->id ?>
                    </td>
                    <td>
                        <?php echo $c->kode?>
                    </td>
                    <td width="50">
                        <a href="<?php echo base_url();?>admin/registrasi/deleteCode/<?php echo $c->id ?>"><button
                                type="button" style="font-family:roboto" class="btn btn-danger">
                                Delete Code Formulir</button></a>
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