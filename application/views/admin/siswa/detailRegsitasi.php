<style>
* {
    box-sizing: border-box;
}

.zoom {
    padding: 50px;
    transition: transform .2s;
    max-height: 300px;
    margin: 0 auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

.zoom:hover {
    -ms-transform: scale(1.5);
    /* IE 9 */
    -webkit-transform: scale(1.5);
    /* Safari 3-8 */
    transform: scale(2.5);
}
</style>
<?php foreach ($detail as $d): ?>
<div class="panel panel-default ">
    <div class="panel-heading">
        <tr>
            <td>
                <a href="#" data-toggle="modal" data-target="#deleteModalRegistrasi"><button type="button"
                        style="font-family:roboto" class="btn btn-danger pull-right">Hapus Bukti Pembayaran</button></a>
            </td>
            <td>
                <?php if($d->status != 0){?>

                <a href="#" data-toggle="modal" data-target="#NonAktifModalRegistrasi"><button type="button"
                        style="font-family:roboto ; margin-right: 40px;" class="btn btn-danger pull-right">Non Aktifkan
                        Nisn</button></a>

                <?php }else{?>
                <a href="#" data-toggle="modal" data-target="#addModalRegistrasi"><button type="button"
                        style="font-family:roboto ; margin-right: 40px;" class="btn btn-success pull-right">Aktifkan
                        Nisn</button></a>
                <?php }?>



            </td>
        </tr>
        <h4 style="font-family:roboto; font-weight:bold">Bukti Pembayaran</h4>
    </div>
    <div class="panel-body ">

        <tr>
            <td>
                <h2 style="font-family:roboto">Nomor Rekening Pengirim : <?php echo $d->nomor_rekening ?></h2>
            </td>
            <td>
                <h2 style="font-family:roboto">Tanggal : <?php echo $d->tanggal ?> Waktu : <?php echo $d->waktu ?></h2>
            </td>
            <td>
                <h4 style="font-family:roboto">NISN : <?php echo $d->nisn ?></h4>
            </td>
            <td>
                <h4 style="font-family:roboto">Nama Pengirim : <?php echo $d->nama_pengirim ?></h4>
            </td>
            <td>
                <h4 style="font-family:roboto">Email : <?php echo $d->email ?></h4><br><br>
            </td>
            <td>
                <img class="zoom" src="<?php echo base_url();?>upload/<?php echo $d->gambar ?>" />
            </td>

        </tr>

    </div>
</div><br><br><br><br>

<?php endforeach; ?>