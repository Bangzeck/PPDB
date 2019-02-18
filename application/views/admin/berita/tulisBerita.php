<h1 style="font-family:roboto">Berita</h1>

<form action="<?php echo base_url('admin/berita/add'); ?>" method="post" role="form" enctype="multipart/form-data">

    <label for="judul">Judul</label>
    <input class="form-control" placeholder="Judul" name="judul" type="judul" autofocus>

    <div class="form-group">
        <label for="file">Foto</label>
        <input style="width:200px" type="file" name="gambar" class="form-control-file">
    </div>

    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>


    <textarea name="isi" class="editor1" id="editor1"></textarea><br>

    <button type="submit" class="btn btn-success" data-dismiss="modal">Posting</button>

    <script>
    CKEDITOR.replace('editor1');
    </script>
</form>

<br><br>