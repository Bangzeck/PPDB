<div class="container">
    <br>
    <br>


    <?php if ($daftar != "Tutup") {?>
    <form action="<?php echo base_url('daftar/cek_login'); ?>" method="post" role="form">
        <div class="form-group">
            <label for="kode">Masukkan Kode Form</label>
            <input type="char" class="form-control" name="kode" id="kode" aria-describedby="kode"
                placeholder="Kode Form">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <button type="submit" class="btn btn-primary">Masuk</button>
    </form>

    <?php

    }else{?>
    <h1>Maaf Pendaftaran Belum Di Buka</h1>
    <?php

    }
    ?>


</div>