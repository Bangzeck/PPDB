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
