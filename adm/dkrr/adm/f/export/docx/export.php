<?php

session_start();

require '../../../auth.php';

require '../../fungsi/fungsi.php';




$menu = 'Export';

$gudep = 'Gugus Depan';

?>
<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title></title>
</head>
<body onload="">

<div id="page-content">
<center><b class="mt-0">Data Potensi</b><br><br>
    
     <table  border="1" cellpadding="8" width="100%">
              <thead>
                <tr>
                  <th style="font-size: 12px;" rowspan="2"  scope="col"><b>#</b></th>
                  <th style="font-size: 12px;" rowspan="2" scope="col"><b>No. Gudep</b></th>
                  <th style="font-size: 12px;" rowspan="2" scope="col"><b>Sanggar Bakti</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Calon Penegak</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Penegak Bantara</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Penegak Laksana</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Penegak Garuda</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Calon Pandega</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Pandega</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Pandega Garuda</b></th>
                  <th style="font-size: 12px;" colspan="2" scope="col"><b>Jumlah</b></th>
            
                </tr>
                <tr>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PA</b></th>
                  <th style="font-size: 12px;" scope="col"><b>PI</b></th>
                </tr>
              </thead>
              <tbody>
<?php 

$i = 1;
foreach (select__gudep() as $key):

?>
                <tr>
                  <th style="font-size: 12px;" scope="row"><?= $i++; ?></th>
                  <td style="font-size: 10px;" ><?= $key['nogudep'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['sanggarbakti'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['capenpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['capenpi'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['penbanpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['penbanpi'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['penlakpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['penlakpi'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['pengarpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['pengarpi'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['capanpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['capanpi'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['panpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['panpi'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['pangarpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['pangarpi'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['jumlahpa'] ?></td>
                  <td style="font-size: 10px;" ><?= $key['jumlahpi'] ?></td>
              </tr>
<?php endforeach; ?>              
            </tbody>
        </table>
</div><br><br>
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