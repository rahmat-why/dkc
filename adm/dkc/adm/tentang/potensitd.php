<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['submit_layer'])) {
	insert__layer();
}

if (isset($_POST['hapus_layer'])) {
	hapus__layer();
}

if (isset($_POST['sunting_layer'])) {
  sunting__layer();
}

$menu = 'Potensi T/D';

?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Admin Pramuka Kab. Bogor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?= url() ?>assets/img/logo.png"> 
<link rel="stylesheet" href="<?= url() ?>assets/css/bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
</head>
<body>
  
<div class="page-wrapper chiller-theme toggled">
  <div class="header">
    
  </div>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <p style="font-size: 19px;">Beranda/<b><?= $menu ?></p></b>
      <hr>
    </div>

    <div>
    	<table class="table table-bordered">
    		<tr>
    			<th>#</th>
    			<th>Kategori</th>
    			<th>Jumlah</th>
    		</tr>
<?php 
$i = 1;
foreach (select__potensicapen() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td>
            Calon Penegak
          </td>
    			<td><?= $key['SUM(capenpa + capenpi)']; ?></td>
    		</tr>
<?php endforeach; ?>    		

<?php 
foreach (select__potensipenban() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            Penegak Bantara
          </td>
          <td><?= $key['SUM(penbanpa + penbanpi)']; ?></td>
        </tr>
<?php endforeach; ?>        

<?php 
foreach (select__potensipenlak() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            Penegak Laksana
          </td>
          <td><?= $key['SUM(penlakpa + penlakpi)']; ?></td>
        </tr>
<?php endforeach; ?>  

<?php 
foreach (select__potensipengar() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            Penegak Garuda
          </td>
          <td><?= $key['SUM(pengarpa + pengarpi)']; ?></td>
        </tr>
<?php endforeach; ?>  

<?php 
foreach (select__potensicapan() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            Calon Pandega
          </td>
          <td><?= $key['SUM(capanpa + capanpi)']; ?></td>
        </tr>
<?php endforeach; ?>  

<?php 
foreach (select__potensipan() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            Pandega
          </td>
          <td><?= $key['SUM(panpa + panpi)']; ?></td>
        </tr>
<?php endforeach; ?>  

<?php 
foreach (select__potensipangar() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            Pandega Garuda
          </td>
          <td><?= $key['SUM(pangarpa + pangarpi)']; ?></td>
        </tr>
<?php endforeach; ?>  

    	</table>
    </div>
  </main>
</div>

<script src="<?= url() ?>assets/js/jquery.min.js"></script>
<script src="<?= url() ?>assets/js/bootstrap4.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script> 
  $(function(){
    $(".header").load("<?= url() ?>/adm/dkc/adm/assets/property/header.php"); 
  });
</script>

<script>
  $('.layer').tooltip({ boundary: 'window' })
</script>

</body>
</html>
