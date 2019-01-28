<h1>Pengumuman</h1><br>

<form action="<?php echo base_url('admin/pengumuman/add'); ?>" method="post" role="form">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>

    <h3>Judul : </h3>
    <input class="form-control" placeholder="Judul" name="judul" type="judul" autofocus><br>

    <textarea name="isi" class="editor1" id="editor1"></textarea><br>

    <button type="submit" class="btn btn-success" data-dismiss="modal">Posting</button>

    <script>
        CKEDITOR.replace('editor1');
    </script>
</form>

<br><br>

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
        <?php foreach ($getpengumuman as $s): ?>
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