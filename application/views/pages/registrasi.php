<div class="container">
    <br>
    <div class="jumbotron">
    <h1 class="display-4">Selamat Datang Peserta Didik Baru</h1>
    <p class="lead">Silahkan Membayar dan upload bukti pembayaran di bawah ini </p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="<?php echo base_url('daftar_nisn'); ?>" role="button">Isi From</a>
    </p>
    </div>

    <form action="<?php echo base_url('registrasi/add'); ?>" method="post" role="form">
        <div class="form-group">
            <label for="nisn">NISN *</label>
            <input type="char" name="nisn" class="form-control" aria-describedby="nisn" placeholder="ex : 123456789">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="nomor_registrasi">Nomor Registrasi *</label>
            <input type="char" class="form-control" name="nomor_registrasi" aria-describedby="nomor_registrasi" placeholder="ex : 123456789">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" name="email" class="form-control" aria-describedby="email" placeholder="smkbinautama@gmail.com">
            <small id="email" class="form-text text-muted">Kode akan kami kirimkan melalui E-mail.</small>
        </div>

        <div class="form-group">
            <label for="file">Upload Bukti Registrasi *</label>
            <input type="file"name="gambar" class="form-control-file" >
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>