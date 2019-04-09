<div class="panel panel-default ">
    <div class="panel-heading">
        <h4 style="font-family:roboto; font-weight:bold">DATA ALUMNI <a class="btn btn-success pull-right"
                href="<?php echo base_url("admin/alumni/tambah")?>">Tambah Alumni</a></h4>
    </div>

    <div class="panel-body">


        <table class="table table-striped table-bordered data">
            <thead style="font-family:roboto">
                <tr>
                    <th>Nama </th>
                    <th>Titel</th>
                    <th>Kutipan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumni as $a): ?>
                <tr>
                    <td width="130">
                        <?php echo $a->nama?>
                    </td>
                    <td>
                        <?php echo $a->titel?>
                    </td>
                    <td>
                        <?php echo substr($a->kutipan, 0, 170)?>.......
                    </td>
                    <td width="120">
                        <a href="<?php echo base_url();?>admin/alumni/edit/<?php echo $a->id ?>"><button type="button"
                                style="font-family:roboto" class="btn btn-primary">
                                Edit</button></a>
                        <a href="<?php echo base_url();?>admin/alumni/delete/<?php echo $a->id ?>"><button type="button"
                                style="font-family:roboto" class="btn btn-danger">
                                Delete</button></a>
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