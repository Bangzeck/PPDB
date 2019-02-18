<div class="panel panel-default ">
    <div class="panel-heading">

        <h4 style="font-family:roboto; font-weight:bold">LIST SEMUA SISWA BARU</h4>
    </div>

    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nisn</th>
                    <th>Jenis Kelamin</th>
                    <th>Diterima/Ditolak</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $s): ?>
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
                        <?php echo $s->status_pendaftaran ?>
                    </td>
                    <td width="100">
                        <a href="<?php echo site_url('admin/siswa/detailSiswa/'.$s->id) ?>"
                            class="btn btn-primary pull-left"><i></i>Detail Siswa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div><br><br><br><br>