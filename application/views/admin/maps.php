<div class="panel panel-default ">
    <div class="panel-heading">
        <h4 style="font-family:roboto; text-align:center; font-weight:bold">MAPS SETTING</h4>
    </div>

    <div class="col-lg-12"><br><br>
        <?php foreach($maps as $m): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Setting Maps
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <form role="form" method="post" action="<?php echo base_url('admin/maps/update'); ?>">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td>Link Google Maps</td>
                                    <td>
                                        <input class="form-control" type="text" name="link" id="link"
                                            value="<?php echo $m->link ?>" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Height</td>
                                    <td>
                                        <input class="form-control" type="text" name="height" id="height"
                                            value="<?php echo $m->height ?>" required="">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Width</td>
                                    <td>
                                    <input class="form-control" type="text" name="width" id="width"
                                            value="<?php echo $m->width ?>" required="">
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table><button type="submit" class="btn btn-primary pull-right" name="update"
                            id="update">Update</button>
                    </form>
                    <p style="text-align:center; font-weight:bold; color:green">
                        <?php echo $this->session->flashdata('maps');?></p>
                </div>
                <!-- /.table-responsive -->
            </div>

        </div>
        <!-- /.panel -->
        <?php endforeach; ?>
    </div>


</div>