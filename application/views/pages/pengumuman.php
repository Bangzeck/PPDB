    <div class="container">
        <br>
        <br>
        <?php if ($pengumuman != "Tutup") {?>
        <form action="<?php echo base_url('pages/detailPengumuman'); ?>" method="post" role="form">
            <div class="form-group">
                <label for="kode">Masukkan NISN</label>
                <input type="char" class="form-control" name="nisn" id="nisn" aria-describedby="nisn"
                    placeholder="Nomor Indusk Siswa">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <button type="submit" class="btn btn-primary">Lihat</button>
        </form> 
        <?php

        }else{?>

        <h1>Maaf Pengumuman Belum Di Buka</h1>
        <?php
        } ?>
    </div>