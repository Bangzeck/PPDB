<div style="font-family:roboto" class="container">
    <br>




    <?php if ($daftar != "Tutup") {?>
    <div class="jumbotron">
        <h1 class="display-4" style="font-weight:bold">Selamat Datang Peserta Didik Baru</h1>
        <p class="lead">Silahkan Membayar dan upload bukti pembayaran di bawah ini </p>
        <hr class="my-4">
        <p>Jika sudah melakukan registrasi silahkan isi form dengan klik tombol berikut : .</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="<?php echo base_url('daftar_nisn'); ?>" role="button">Isi
                Fromulir</a>
        </p>
    </div>

    
    <form action="<?php echo base_url('registrasi/add'); ?>" method="post" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nisn">NISN *</label>
            <input type="char" name="nisn" class="form-control" aria-describedby="nisn">

        </div>
        <div class="form-group">
            <label for="nomor_registrasi">Nomor Registrasi *</label>
            <input type="char" class="form-control" name="nomor_registrasi" aria-describedby="nomor_registrasi"
                placeholder="ex : 123456789">
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" name="email" class="form-control" aria-describedby="email"
                placeholder="smkbinautama@gmail.com">

        </div>

        <div class="form-group">
            <label for="file">Upload Bukti Registrasi *</label>
            <input type="file" name="gambar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php

        }else{?>
    <br>
    <h1>Maaf Registrasi Belum Di Buka</h1>
    <?php
        } ?>


</div>