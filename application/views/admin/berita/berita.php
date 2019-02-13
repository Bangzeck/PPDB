<div class="panel panel-default ">
    <div class="panel-heading">
    <a href="<?php echo base_url('admin/berita/write')?>"><button type="button" class="btn btn-success pull-right">Tambah
            Berita</button></a>
        <h4 style="font-family:roboto; font-weight:bold">LIST BERITA</h4>
    </div><br>

    <div class="panel-body">
    <table class="table table-striped table-bordered data">

        <thead>
            <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($berita as $s): ?>
            <tr>
                <td width="15">
                    <?php echo $s->id ?>
                </td>
                <td>
                    <?php echo $s->judul ?>
                </td>
                <td>
                    <?php echo $s->tanggal ?>
                </td>
                <td width="130">
                    <a href="<?php echo site_url('admin/berita/edit/'.$s->id) ?>"><button
                            class="btn btn-primary">Edit</button></a>
                    <a href="<?php echo site_url('admin/berita/delete/'.$s->id) ?>"><button
                            class="btn btn-danger pull-right">Hapus</button>
                </td></a>
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
    </div>

</div><br><br><br><br>