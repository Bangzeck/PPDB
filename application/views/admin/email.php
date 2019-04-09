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
                        <form action="<?php echo site_url('admin/email/delete_multiple'); ?>" method="post">
                            <label>
                                <input type="checkbox" class="check" id="checkAll"> &nbsp Check All
                            </label>
                            &nbsp&nbsp&nbsp
                            <button class="btn btn-danger" type="submit" name="action" value="delete">Delete</button>


                            <div class="panel-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover table-email">
                                        <tbody>

                                            <?php if ($jumlahPesan != 0) {
                                         foreach ($email as $s ):?>
                                            <tr class="unread selected">
                                                <td>
                                                    <div class="ckbox ckbox-theme">
                                                        <input type="checkbox" class="check" name="msg[]"
                                                            value="<?php echo $s->id; ?>">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <a
                                                                href="<?php echo base_url();?>admin/email/detailEmail/<?php echo $s->id ?>">
                                                                <h4 class="text-primary"><?php echo $s->nama ?>
                                                            </a>

                                                            &nbsp(<a
                                                                href="<?php echo base_url();?>admin/email/detailEmail/<?php echo $s->id ?>"><small><?php echo $s->email ?></small></a>)<span
                                                                class="pull-right"><small><?php echo $s->tanggal ?></small></span>
                                                            </h4>
                                                            <span>
                                                                <h4><?php echo $s->subjek ?></h4>
                                                                <h5 style="color:red" class="pull-right">
                                                                    <?php if($s->status != 1){
                                                                        echo "Belum Dibalas";
                                                                    }else{
                                                                        echo "Sudah Dibalas";
                                                                    } ?>
                                                                </h5>
                                                            </span>
                                                            <p><?= substr($s->pesan, 0, 140) ?>....</p>


                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach;

                                    }else{
                                        echo "Maaf Tidak Ada Email Masuk";
                                    } ?>



                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive -->

                            </div>



                        </form>

                        <!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div>
            </div>
        </div>

    </div>
</div><br><br><br><br>