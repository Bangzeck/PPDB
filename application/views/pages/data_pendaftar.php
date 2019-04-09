<div class="panel panel-default container">

    <div class="panel-body"><br>

        <table class="table table-striped table-bordered data">
            <thead style="font-family:roboto">
                <tr>
                    <th>Nisn</th>
                    <th>Nomor Rekening Pengirim</th>
                    <th>Nama Pengirim</th>
                    <th>E-mail</th>
                    <th>Status Kode Formulir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrasi as $s): ?>
                <tr>
                    <td width="120">
                        <?php echo $s->nisn ?>
                    </td>
                    <td width="240">
                        <?php echo $s->nomor_rekening?>
                    </td>
                    <td width="200"> 
                        <?php echo $s->nama_pengirim ?>
                    </td>
                    <td width="240"> 
                        <?php echo $s->email ?>
                    </td>
                    <td>
                        <?php if ($s->status != 0) {
                            echo "Aktif";
                        }else if($s->status != 1){
                            echo "Belum Aktif";
                        }else{
                            echo "Empty";
                        }?>
                    </td> 
                </tr>
                <?php endforeach; ?>


            </tbody>
        </table>
    </div>

</div><br><br><br><br>

<script type="text/javascript">
$(document).ready(function() {
    $('.data').DataTable();
});
</script>