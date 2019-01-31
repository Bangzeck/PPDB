


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<br>
<div class="col-md-2"></div>
<div class="col-md-8">
    <div id="postlist">
        <?php foreach ($pengumuman as $p): ?>
        <div class="panel">
            <div class="panel-heading">
                <div class="text-center">
                    <div class="row">
                        <div class="col-sm-9">
                            <h3 class="pull-left"><?php echo $p->judul ?></h3>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="pull-right">
                                <small><em><?php echo $p->tanggal ?></em></small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <!-- <a href="#" class="thumbnail">
                    <img alt="Image" src="http://i.imgur.com/tAHVmXi.jpg">
                </a> -->
                <p><?= substr($p->isi, 0, 350) ?>........</p>
                <a href="<?php echo base_url();?>pages/readmore/<?php echo $p->id ?>" >Read more</a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
    <div class="text-center"><a href="#" id="loadmore" class="btn btn-primary">Older Posts...</a></div>
</div>
<div class="col-md-1"></div>
<div class="col-md-3">
</div>
<div class="col-md-1">
</div>
