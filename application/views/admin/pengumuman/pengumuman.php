
<a href="<?php echo base_url('admin/pengumuman/write')?>"><button  type="button" class="btn btn-success">Tambah Pengumuman</button></a>
<h2>List Pengumuman</h2>
<table class="table table-striped table-bordered data">

    <thead>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pengumuman as $s): ?>
        <tr>
            <td width="15">
                <?php echo $s->id ?>
            </td>
            <td>
                <?php echo $s->judul ?>
            </td>
            <td>
                <?php echo $s->tanggal ?>
            </td>
            <td width="250">
                <a href="<?php echo site_url(''.$s->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i>
                    Edit</a>
                <a href="<?php echo site_url('admin/pengumuman/delete/'.$s->id) ?>" class="btn btn-small text-danger"><i
                        class="fas fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>


    </tbody>
</table>