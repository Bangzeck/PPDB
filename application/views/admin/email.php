<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">

        <div class="col-sm-11">
            <div class="panel rounded shadow panel-teal">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Jumlah Inbox (<?php echo $jumlahPesan?>)</h3>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading inner-all">
                    <div class="pull-right">
                        <ul class="list-inline no-margin">
                            <li class="hidden-xs"><span class="text-muted">Showing 1-50 of 2,051 messages</span></li>
                            <li>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-default"><i class="fa fa-angle-left"></i></a>
                                    <a href="#" class="btn btn-sm btn-default"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </li>
                            <li class="hidden-xs">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li class="dropdown-header">Display density :</li>
                                        <li class="active"><a href="#">Comfortable</a></li>
                                        <li><a href="#">Cozy</a></li>
                                        <li><a href="#">Compact</a></li>
                                        <li class="dropdown-header">Configure inbox</li>
                                        <li><a href="#">Settings</a></li>
                                        <li><a href="#">Themes</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Help</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-sub-heading -->


                <form action="<?php echo site_url('admin/email/delete_multiple'); ?>" method="post">
                    <select name="action">
                        <option value="null">Bulk Action</option>
                        <option value="delete">Delete</option>
                    </select>
                    <input type="submit" name="submit" value="Action">

                    <div class="panel-body no-padding">
                        <div class="table-responsive">
                            <table class="table table-hover table-email">
                                <tbody>

                                    <?php if ($jumlahPesan != 0) {
                                         foreach ($email as $s ):?>
                                    <tr class="unread selected">
                                        <td>
                                            <div class="ckbox ckbox-theme">
                                                <input type="checkbox" name="msg[]" value="<?php echo $s->id; ?>">
                                                <label for="checkbox1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">

                                                    <h4 class="text-primary"><?php echo $s->nama ?>
                                                        &nbsp(<small><?php echo $s->email ?></small>)<span
                                                            class="pull-right"><small><?php echo $s->tanggal ?></small></span>
                                                    </h4>
                                                    <h4 class="email-summary"><?php echo $s->subjek ?></h4>
                                                    <p class="email-summary"><?= substr($s->pesan, 0, 140) ?>....</p>


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

<script type="text/javascript">
$(document).ready(function() {
    $("input[name='checkAll']").click(function() {
        var checked = $(this).attr("checked");
        $("#myTable tr td input:checkbox").attr("checked", checked);
    });
});
</script>