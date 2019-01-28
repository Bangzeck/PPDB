<h2>Belum Verfikasi</h2>
<table class="table table-striped table-bordered data">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Nisn</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            <?php foreach ($verifikasi as $s): ?>
            <tr>
                <td width="160">
                    <?php echo $s->nama_siswa ?>
                </td>
                <td>
                    <?php echo $s->nisn ?>
                </td>
                <td>
                <?php echo $s->jenis_kelamin ?>
                </td>
                <td width="250">
                    <a href="<?php echo site_url(''.$s->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="<?php echo site_url(''.$s->id) ?>" class="btn btn-small text-danger"><i
                            class="fas fa-trash"></i> Hapus</a>
    
                    <!-- <a onclick="deleteConfirm('<?php echo site_url('admin/siswa/delete/'.$s->id) ?>')" href="#!" class="btn btn-small text-danger"><i
                            class="fas fa-trash"></i> Hapus</a> -->
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>