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
  <title>export</title>
</head>
<body><br><br><br>

  <div id="page-content">
      <center><b>Rencana Kerja</b></center><br>
            <table border="1" width="100%" style="color: black;">
              <thead>
          <tr>
            <th scope="col"><b>#</b></th>
            <th scope="col"><b>Kegiatan</b></th>
            <th scope="col"><b>Tahun</b></th>
         
          </tr>
        </thead>
        <tbody>
<?php 

$i = 1;
foreach (select__rencanakerja() as $key):

?>        
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $key['kegiatan'] ?></td>
            <td><?= $key['tahun'] ?></td>
            
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