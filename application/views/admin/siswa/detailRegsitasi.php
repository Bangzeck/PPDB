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
                        style="font-family:roboto" class="btn btn-danger pull-right">Hapus</button></a>
            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#addModalRegistrasi"><button type="button"
                        style="font-family:roboto ; margin-right: 40px;"
                        class="btn btn-success pull-right">Tambah</button></a>
            </td>
        </tr>
        <h4 style="font-family:roboto; font-weight:bold">Bukti Pembayaran</h4>
    </div>
    <div class="panel-body ">

        <tr>
            <td>
                <h2 style="font-family:roboto">Nomor Registrasi : <?php echo $d->nomor_registrasi ?></h2>
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