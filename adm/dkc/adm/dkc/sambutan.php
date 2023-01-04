<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

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
      <p style="font-size: 19px;">DKC/<b>Sambutan</p></b>
      <div style="text-align: right;">
        <a href="<?= url() ?>adm/dkc/adm/f/fungsi/tambah_sambutan.php">
          <button type="button" class="btn btn-primary sambutan" data-toggle="tooltip" title="Upload Sambutan">
            <i class="fa fa-upload"></i>
          </button>
        </a>

      </div>
      <hr>
    </div>

    <div>
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>Nama Ketua</th>
          <th>Isi</th>
        </tr>
<?php 
$i = 1;
foreach (select__sambutan() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            <a href="<?= url() ?>adm/dkc/adm/assets/file/sambutan/<?= $key['gambar'] ?>">
              <img src="<?= url() ?>adm/dkc/adm/assets/file/sambutan/<?= $key['gambar'] ?>" style="width: 200px;">
            </a>
          </td>
          <td><?= $key['nama_ketua'] ?></td>
          <td><?= $key['isi'] ?></td>
        </tr>
<?php endforeach; ?>        
      </table>
    </div>
  </main>
  <!-- page-content" -->
</div>

<script src="<?= url() ?>assets/js/jquery.min.js"></script>
<script src="<?= url() ?>assets/js/bootstrap4.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script> 
  $(function(){
    $(".header").load("<?= url() ?>adm/dkc/adm/assets/property/header.php"); 
  });
</script>

<script>
  $('.sambutan').tooltip({ boundary: 'window' })
</script>

</body>
</html>
