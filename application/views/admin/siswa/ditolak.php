<div class="panel panel-default ">
    <div class="panel-heading">

        <h4 style="font-family:roboto; font-weight:bold">SISWA DITOLAK</h4>
    </div>

    <div class="panel-body">

        <table class="table table-striped table-bordered data">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nisn</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ditolak as $s): ?>
                <tr>
                    <td width="160">
                        <?php echo $s->nama_siswa ?>
                    </td>
                    <td>
                        <?php echo $s->nisn ?>
                    </td>
                    <td>
                        <?php echo $s->jenis_kelamin ?>
                    </td>
                    <td width="100">
                        <a href="<?php echo site_url('admin/siswa/detailSiswa/'.$s->id) ?>"
                            class="btn btn-primary"><i></i>
                            Detail Siswa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div><br><br><br><br>