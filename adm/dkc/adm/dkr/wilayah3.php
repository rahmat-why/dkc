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

$wilayah = 'Wilayah 3';

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
<!-- partial:index.partial.html -->
<body>

<div class="page-wrapper chiller-theme toggled">
  <div class="header">
    
  </div>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <p style="font-size: 19px;"><?= $wilayah ?><b></p></b>
      <div style="text-align: right;">
        
      </div>
      <hr>
    </div>

    <div class="row">
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Kwaran</th>
          <th>#</th>
        </tr>
<?php $i = 1; ?>        
<?php foreach (select__wilayah3() as $key): ?>        
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $key['nama'] ?></td>
          <td><a href="kwaran.php?kwaran=<?= $key['nama'] ?>">Kunjungi</a></td>
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
    $(".header").load("<?= url() ?>adm/dkc/adm/assets/property/header.php"); 
  });
</script>

<script>
  $('.layer').tooltip({ boundary: 'window' })
</script>

</body>
</html>
