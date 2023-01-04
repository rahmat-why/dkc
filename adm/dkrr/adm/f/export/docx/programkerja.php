<?php

session_start();

require '../../../auth.php';

require '../../fungsi/fungsi.php';




$menu = 'Export';

$gudep = 'Gugus Depan';

$thn = mysqli_fetch_assoc(select__thn());

?>


<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <title>export</title>
</head>
<body><br><br><br>
  
  <div id="page-content">
    <center><b>Program Kerja</b></center><br><br>
            <table border="1" width="100%" style="color: black;">
              <thead>
                <tr>
                  <th rowspan="2" scope="col"><b>#</b></th>
                  <th rowspan="2" scope="col"><b>Kegiatan</b></th>
                  <th colspan="12" scope="col"><center><b>Pelaksanaan Tahun <?= $thn['thn1'] ?>/<?= $thn['thn2'] ?></b></center></th>
                  
                </tr>
                <tr>
                  <th scope="col">1</th>
                  <th scope="col">2</th>
                  <th scope="col">3</th>
                  <th scope="col">4</th>
                  <th scope="col">5</th>
                  <th scope="col">6</th>
                  <th scope="col">7</th>
                  <th scope="col">8</th>
                  <th scope="col">9</th>
                  <th scope="col">10</th>
                  <th scope="col">11</th>
                  <th scope="col">12</th>
                </tr>
              </thead>
              <tbody>
<?php 

$i = 1;
foreach (select__programkerja() as $key):

?>        
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $key['kegiatan'] ?></td>
            <td <?= $key['bulan1'] ?>> </td>
            <td <?= $key['bulan2'] ?>> </td>
            <td <?= $key['bulan3'] ?>> </td>
            <td <?= $key['bulan4'] ?>> </td>
            <td <?= $key['bulan5'] ?>> </td>
            <td <?= $key['bulan6'] ?>> </td>
            <td <?= $key['bulan7'] ?>> </td>
            <td <?= $key['bulan8'] ?>> </td>
            <td <?= $key['bulan9'] ?>> </td>
            <td <?= $key['bulan10'] ?> ></td>
            <td <?= $key['bulan11'] ?> ></td>
            <td <?= $key['bulan12'] ?> ></td>
              </td>
          </tr>
<?php endforeach; ?>
        </tbody>
      </table>

      </div>  
      <a class="word-export" href="javascript:void(0)"><button>Export</button></a> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/FileSaver.js"></script> 
<script src="js/jquery.wordexport.js"></script> 
<script>
 
    jQuery(document).ready(function($) {
        $("a.word-export").click(function(event) {
            $("#page-content").wordExport();
        });
    });


    </script>
</body>
</html>