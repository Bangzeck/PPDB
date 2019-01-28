<h2>Registrasi</h2>
<table class="table table-striped table-bordered data">
    <thead>
        <tr>
            <th>Nisn</th>
            <th>Nomor Registrasi</th>
            <th>Gambar</th>
            <th>Email</th>
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

            <td width="250">
                <a href="<?php echo site_url('admin/siswa/edit/'.$s->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>
                    Edit</a>
                <a href="<?php echo site_url('admin/siswa/delete/'.$s->id) ?>" class="btn btn-small text-danger"><i
                        class="fas fa-trash"></i> Hapus</a>

                <!-- <a onclick="deleteConfirm('<?php echo site_url('admin/siswa/delete/'.$s->id) ?>')" href="#!" class="btn btn-small text-danger"><i
                        class="fas fa-trash"></i> Hapus</a> -->
            </td>
        </tr>
        <?php endforeach; ?>


    </tbody>
</table>

<script type="text/javascript">
$(document).ready(function() {
    $('.data').DataTable();
});
</script>