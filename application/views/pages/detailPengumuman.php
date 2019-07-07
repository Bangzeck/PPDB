<div class="panel panel-default container"><br>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-stdiped table-bordered table-hover">
                <?php foreach ($detailPengumuman as $s): ?>
                <tbody>
                    <tr>
                        <td colspan="3" align="center">
                            <h4>No.Pendafataran:
                                <?php echo $s->id;?>-<?php echo $s->nisn;?>/SMK-PPDB/<?php echo date("y");?>
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><?php echo $s->nama_siswa;?></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td><?php echo $s->nisn?></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td><?php echo $s->nama_sekolah?></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><b>DINYATAKAN :</b></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <h3><b>......<?php echo $s->status_pendaftaran; ?>......</b></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dengan Nilai : <?php echo $s->nilai_ujian ?> 
                        </td>
                    </tr>
                </tbody>
            </table><br>
            <h4>Silakan Cetak Lembar Bukti Diterima dengan Klik tombol detail : </h4>
            <a href="<?php echo base_url('pages/cetak/'.$s->nisn); ?>"><button
                    class="btn btn-primary pull-right">Detail</button></a>
            <?php endforeach; ?>

        </div>
    </div>
</div>