<h1>Edit Berita</h1><br>

<form action="<?php echo base_url('admin/berita/edit'); ?>" method="post" role="form">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
    <?php foreach($editBerita as $e): ?>
    <h3>Judul : </h3>
    <input class="form-control"  name="judul" type="judul" value="<?php echo $e->judul ?>" autofocus><br>
    <input class="form-control"  name="id" type="id" value="<?php echo $e->id ?>" autofocus readonly><br>
    <textarea name="isi" class="editor1" id="editor1" value="GGG" ><?php echo $e->isi ?></textarea><br>

    <button type="submit" class="btn btn-success" data-dismiss="modal">Posting</button>
<?php endforeach; ?>
    <script>
    CKEDITOR.replace('editor1');
    </script>
</form>

<br><br>
