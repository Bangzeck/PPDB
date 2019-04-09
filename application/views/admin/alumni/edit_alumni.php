<h1>Edit Alumni</h1><br>
<?php foreach($alumni as $a): ?>
<form action="<?php echo base_url('admin/alumni/update/'.$a->id); ?>" method="post" role="form" enctype="multipart/form-data">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>


    <label for="Alumni">Alumni</label>
    <input class="form-control" placeholder="Nama" value="<?php echo $a->nama ?>" name="nama" type="nama"
        autofocus><br>
        <input class="form-control" placeholder="Titel" value="<?php echo $a->titel ?>" name="titel" type="titel"
        autofocus><br>

    <div class="form-group">
        <label for="file">Foto :</label><br>

        <?php
        if($a->gambar==''){?>
        <label>Belum Ada Gambar</label><br>
        <?php }else{ ?>
        <img src="<?php echo base_url()?>upload/alumni/<?php echo $a->gambar ?>" width="100"><br>
        <?php }?><br>

        <input type="file" name="gambar">

    </div>


    <textarea name="kutipan" class="editor1" id="editor1"><?php echo $a->kutipan ?></textarea><br>

    <button type="submit" class="btn btn-success" data-dismiss="modal">Simpan</button>
    
    <a href="#" data-toggle="modal" data-target="#hapusBerita"><button type="button"
                                class="btn btn-danger pull-right">Hapus</button></a>


    
    <script>
    CKEDITOR.replace('editor1');
    </script>
</form>
<?php endforeach; ?>
<br><br>