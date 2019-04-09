<div class="container">
    <br>
    <?php if ($daftar != "Tutup") {?>
    <div class="jumbotron">
        <h5 class="border border-success" style="text-align:center; font-weight:bold; color:red">
            <?php echo $this->session->flashdata('sukses');?></h5>
        <h5 class="border border-danger" style="text-align:center; font-weight:bold; color:red">
            <?php echo $this->session->flashdata('tidak_sukses');?></h5>
        <h1 class="display-4" style="font-weight:bold">Selamat Datang Peserta Didik Baru</h1>
        <?php foreach ($tampil_daftar as $t): ?>
        <img height="500" width="1050" class="img-fluid"
            src="<?php echo base_url();?>upload/alur/<?php echo $t->gambar ?>" alt="Alur Pendaftaran"><br><br>
        <h4 style="color:red">No.Rekening : <?php echo $t->nomor_rekening ?></h4>
        <h4 style="color:red">Atas Nama : <?php echo $t->nama_rekening ?></h4>
        <?php endforeach; ?>
        <br>
        <h4>List Calon Siswa yang sudah melakukan registrasi : <a class="btn btn-primary" href="<?php echo base_url('data_pendaftar') ?>">List Registrasi</a></h4>
    </div>
    <p class="lead" style="font-weight:bold">Silahkan Membayar dan upload bukti pembayaran di bawah ini : </p>
    <form action="<?php echo base_url('registrasi/add'); ?>" method="post" role="form" enctype="multipart/form-data">

        <div style="font-family:roboto" class="row col-xs-12">

            <div class="form-group col-md-3">
                <label for="nisn">NISN *</label>
                <input type="char" maxlength="10" name="nisn" class="form-control" aria-describedby="nisn"
                    placeholder="Nomor Induk Siswa Nasional" onKeyPress="return hanyaAngka(event);" required>

            </div>
            <div class="form-group col-md-3">
                <label for="nomor_rekening">Nomor Rekening Pengirim *</label>
                <input type="char" maxlength="20" class="form-control" name="nomor_rekening"
                    aria-describedby="nomor_rekening" placeholder="ex : 6274517846283780"
                    onKeyPress="return hanyaAngka(event);" required>
            </div>

            <div class="form-group col-md-3">
                <label for="tanggal">Tanggal *</label>
                <input type="date" maxlength="8" class="form-control" name="tanggal"
                    onKeyPress="return hanyaAngka(event);" required>
            </div>

            <div class="form-group col-md-3">
                <label for="waktu">Waktu *</label><br>

                <input type="text" step="2" minlength="8" maxlength="8" class="form-control" name="waktu"
                    placeholder="ex : 09:30:45 (jam:menit:detik)" required>
                <small>Masukkan waktu pembayaran dengan format : (jam:menit:detik) secara berurutan.</small>
            </div>

            <div class="form-group col-md-3">
                <label for="nama_pengirim">Nama Pengirim *</label>
                <input type="char" class="form-control" name="nama_pengirim" aria-describedby="nama_pengirim"
                    placeholder="Nama Pengirim" required>
            </div>

            <div class="form-group col-md-3">
                <label for="email">Email *</label>
                <input type="email" name="email" class="form-control" aria-describedby="email"
                    placeholder="smkbinautama@gmail.com" required>

            </div>

            <div class="form-group col-md-3">
                <label for="file">Upload Bukti Registrasi *</label>
                <input style="width:200px" type="file" name="gambar" class="form-control-file" required>
                <br>
            </div>

            <div class="form-group col-md-3"><br>
                <button type="submit" class="btn btn-primary col-md-5">Submit</button>
            </div>

        </div>
    </form>
    <h5 class="border border-success" style="text-align:center; font-weight:bold; color:red">
        <?php echo $this->session->flashdata('sukses');?></h5>
    <h5 class="border border-danger" style="text-align:center; font-weight:bold; color:red">
        <?php echo $this->session->flashdata('tidak_sukses');?></h5>


    <hr class="my-5">
    <div class="jumbotron">
        <h3>Jika sudah melakukan registrasi silahkan tunggu aktifasi NISN pada hari-hari kerja.</h3>
    </div>




    <?php

        }else{?>
    <br>
    <h1>Maaf Registrasi Belum Di Buka</h1>
    <?php
        } ?>


</div>