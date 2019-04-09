<div class="panel panel-default ">
    <div class="panel-heading">

        <h4 style="font-family:roboto; font-weight:bold">IMPORT NILAI CALON SISWA
            <a href="<?php echo site_url('upload/excel/format/DataSiswa.xlsx') ?>" class="btn btn-success pull-right">Download
                Format</a>

        </h4>

    </div>

    <div class="panel-body">
        <h4>Pilih file yang memiliki extensi .xlsx</h4>
        <form method="post" action="<?php echo site_url('admin/siswa/form') ?>" enctype="multipart/form-data">

            <input type="file" name="file">
            <input class="btn btn-primary" type="submit" name="preview" value="Preview">
        </form>

    <?php
      if(isset($_POST['preview'])){ 
        if(isset($upload_error)){ 
          echo "<div style='color: red;'>".$upload_error."</div>";
          die; 
        }
        

        echo "<form method='post' action='".base_url("admin/siswa/import")."'>";
        

        echo "<div style='color: red;' id='kosong'>
        Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
        </div>";
        
        echo "<table  border='1' cellpadding='8'>
        <tr>
          <th colspan='5'>Preview Data</th>
        </tr>
        <tr>
          <th>NISN</th>
          <th>Nama</th>
          <th>Nilai</th>
          <th>Status</th>
        </tr>";

        
        $numrow = 1;
        $kosong = 0;

        foreach($sheet as $row){ 

          $nisn = $row['A']; 
          $nama = $row['B']; 
          $nilai_ujian = $row['C']; 
          $status_pendaftaran= $row['D'];
          

          if(empty($nisn) && empty($nama) && empty($nilai_ujian) && empty($status_pendaftaran))
            continue; 
          
      
          if($numrow > 1){
      
            $nisn_td = ( ! empty($nisn))? "" : " style='background: #E07171;'"; 
            $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'";
            $nilai_td = ( ! empty($nilai_ujian))? "" : " style='background: #E07171;'";
            $status_pendaftaran_td = ( ! empty($status_pendaftaran))? "" : " style='background: #E07171;'";
            

            if(empty($nisn) or empty($nama) or empty($nilai_ujian) or empty($status_pendaftaran)){
              $kosong++; 
            }
            
            echo "<tr>";
            echo "<td".$nisn_td.">".$nisn."</td>";
            echo "<td".$nama_td.">".$nama."</td>";
            echo "<td".$nilai_td.">".$nilai_ujian."</td>";
            echo "<td".$status_pendaftaran_td.">".$status_pendaftaran."</td>";
            echo "</tr>";
          }
          
          $numrow++; 
        }
        
        echo "</table>";

        if($kosong > 0){
        ?>
            <script>
            $(document).ready(function() {

                $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                $("#kosong").show();
            });
            </script>
            <?php
        }else{ 
          echo "<hr>";

          echo "<button type='submit' name='import'>Import</button>";
          echo "<a href='".base_url("admin/siswa")."'>Cancel</a>";
        }
        
        echo "</form>";
      }
    ?>

  </div>

</div><br><br><br><br>