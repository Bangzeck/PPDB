<h1 style="font-family:roboto">Balas Email</h1><br>
<?php foreach($getEmail as $g): ?>
<form action="<?php echo base_url('admin/email/balas'); ?>" method="post" role="form">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
    <?php foreach($detailEmail as $e): ?>
    <label for="email">Email dan Password Pengirim :</label>
    <input class="form-control" value="<?php echo $g->email ?>" name="emailDari" type="text" autofocus readonly><br>
    <input class="form-control" value="<?php echo $g->password?>" name="password" type="password" autofocus
        readonly><br>
    <label for="kepad">Kepada : </label>
    <input class="form-control" value="<?php echo $e->email ?>" name="emailKepada" type="text" autofocus readonly><br>
    <input class="form-control" placeholder="Subjek" name="subjek" type="text" autofocus><br>

    <textarea name="konten" class="editor1" id="editor1"></textarea><br>

    <button type="submit" class="btn btn-success pull-right" data-dismiss="modal">Balas</button>
    <?php endforeach; ?>
    <script>
    CKEDITOR.replace('editor1');
    </script>
</form>
<?php endforeach; ?>
<br><br>