<h1>Edit Berita</h1><br>
<?php foreach($editBerita as $e): ?>
<form action="<?php echo base_url('admin/berita/update/'.$e->id); ?>" method="post" role="form" enctype="multipart/form-data">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>


    <label for="judul">Judul</label>
    <input class="form-control" placeholder="Judul" value="<?php echo $e->judul ?>" name="judul" type="judul"
        autofocus><br>

    <div class="form-group">
        <label for="file">Foto :</label><br>

        <?php
        if($e->gambar==''){?>
        <label>Belum Ada Gambar</label><br>
        <?php }else{ ?>
        <img src="<?php echo base_url()?>upload/berita/<?php echo $e->gambar ?>" width="100"><br>
        <?php }?><br>

        <input type="file" name="gambar" value="<?php echo $e->gambar ?>">

    </div>


    <textarea name="isi" class="editor1" id="editor1"><?php echo $e->isi ?></textarea><br>

    <button type="submit" class="btn btn-success" data-dismiss="modal">Posting</button>
    
    <a href="#" data-toggle="modal" data-target="#hapusBerita"><button type="button"
                                class="btn btn-danger pull-right">Hapus</button></a>


    
    <script>
    CKEDITOR.replace('editor1');
    </script>
</form>
<?php endforeach; ?>
<br><br>