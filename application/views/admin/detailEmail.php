<div class="panel panel-default ">
    <div class="panel-heading">
        <h3 class="panel-title pull-right" style="font-family:roboto; font-weight:bold">Jumlah Inbox
            (<?php echo $jumlahPesan?>)</h3>
        <h4 style="font-family:roboto; font-weight:bold">E-Mail</h4>
    </div>

    <div class="panel-body">

        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <div class="panel rounded shadow panel-teal">

                        <?php foreach ($detailEmail as $d):?>
                        <h4>From : <?php echo $d->nama ?></h4>
                        <h4>Email : <?php echo $d->email ?>&nbsp&nbsp&nbsp(<?php echo $d->tanggal ?>)</h4>
                        <hr>
                        <h4>Subjek : <?php echo $d->subjek ?></h4><br>
                        <h4>Pesan : <?php echo $d->pesan ?></h4>
                        <div>
                            <tr>
                                <td><br><br><br><br>
                                    <a class="btn btn-success pull-right"
                                        href="<?php echo site_url('admin/email/tulisBalas/'.$d->id) ?>">Balas</a>
                                </td>

                                <td>
                                    <a href="#" data-toggle="modal" data-target="#hapusEmail"><button type="button"
                                            class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>


                        </div>



                        <?php endforeach; ?>

                        <!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div>
            </div>
        </div>

    </div>
</div><br><br><br><br>