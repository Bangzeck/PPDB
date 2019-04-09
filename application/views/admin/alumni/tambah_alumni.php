<h1 style="font-family:roboto">Alumni</h1>

<form action="<?php echo base_url('admin/alumni/tambahAlumni'); ?>" method="post" role="form" enctype="multipart/form-data">

    <label for="Nama"></label>
    <input class="form-control" placeholder="Nama" name="nama" type="nama" autofocus><br>
    <input class="form-control" placeholder="Titel" name="titel" type="titel" autofocus>

    <div class="form-group">
        <label for="file">Foto</label>
        <input style="width:200px" type="file" name="gambar" class="form-control-file">
    </div>
    <?php if (validation_errors()) : ?>
    <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
    </div>
    <?php endif; ?>

    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>


    <textarea name="kutipan" class="editor1" id="editor1"></textarea><br>

    <button type="submit" class="btn btn-success" data-dismiss="modal">Tambah</button>

    <script>
    CKEDITOR.replace('editor1');
    </script>
</form>

<br><br>