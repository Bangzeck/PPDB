<h1>Edit Berita</h1><br>

<form action="<?php echo base_url('admin/berita/edit'); ?>" method="post" role="form" enctype="multipart/form-data">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
    <?php foreach($editBerita as $e): ?>
    <label for="judul">Judul</label>
    <input class="form-control" placeholder="Judul" value="<?php echo $e->judul ?>" name="judul" type="judul"
        autofocus><br>
    <input class="form-control" name="id" type="id" value="<?php echo $e->id ?>" autofocus readonly><br>

    <div class="form-group">
        <label for="file">Foto :</label><br>
        <!-- <img src="<?php echo base_url()?>upload/berita/<?php echo $e->gambar ?>" width="100" alt="" name="<?php echo $e->gambar ?>">
        <input style="width:200px" type="file" name="gambar" value="<?php echo $e->gambar ?>" class="form-control-file"> -->

        
        <?php
        if($e->gambar==''){?>
        <label>Belum Ada Gambar</label><br>
        <?php }else{ ?>
        <img src="<?php echo base_url()?>upload/berita/<?php echo $e->gambar ?>" width="100"><br>
        <?php }?><br>
         <input type="file" name="gambar">

    </div>


    <textarea name="isi" class="editor1" id="editor1" value="GGG"><?php echo $e->isi ?></textarea><br>

    <button type="submit" class="btn btn-success" data-dismiss="modal">Posting</button>
    <?php endforeach; ?>
    <script>
    CKEDITOR.replace('editor1');
    </script>
</form>

<br><br>