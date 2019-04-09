<div class="container">
    <br>
    <br>


    <?php if ($daftar != "Tutup") {?>
    <form action="<?php echo base_url('daftar/cek_login'); ?>" method="post" role="form">
        <div class="form-group">
            <label for="kode">Masukkan NISN</label>
            <input type="char" class="form-control" name="kode" id="kode" aria-describedby="kode"
                placeholder="Nomor Induk Siswa Nasional">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <!-- <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            
        </div> -->
        <h5 class="border border-danger" style="text-align:center; font-weight:bold; color:red">
            <?php echo $this->session->flashdata('sudah_pernah');?><?php echo $this->session->flashdata('message');?>
        </h5>

        <button type="submit" class="btn btn-primary">Masuk</button>
    </form>

    <?php
    }else{?>
    <h1>Maaf Pendaftaran Belum Di Buka</h1>
    <?php

    }
    ?>


</div>