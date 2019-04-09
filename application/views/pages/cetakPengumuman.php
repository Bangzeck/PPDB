<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK Bina Utama Kendal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/form-wizard.css" rel="stylesheet">

</head>



<div class="panel panel-default container"><br>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-stdiped table-bordered table-hover">
                <?php foreach ($detailPengumuman as $s): ?>
                <tbody>
                    <tr>
                        <td colspan="3" align="center">
                            <h4>No.Pendafataran:
                                <?php echo $s->id;?>-<?php echo $s->nisn;?>/SMK-PPDB/<?php echo date("y");?>
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><?php echo $s->nama_siswa;?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td><?php echo $s->nisn?></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td><?php echo $s->nama_sekolah?></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><b>DINYATAKAN :</b></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <h3><b>......<?php echo $s->status_pendaftaran; ?>......</b></h3>
                        </td>
                    </tr>
                </tbody>

            </table><br>

            <?php endforeach; ?>
        </div>
    </div><br>
    <a href="<?php echo base_url('pengumuman')?>"><button class="btn btn-primary pull-left">Pengumuman</button></a>
    <button class="btn btn-primary pull-right" onclick="myFunction()">Cetak</button>
</div>


<script>
function myFunction() {
    window.print();
}
</script>