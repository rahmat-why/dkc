<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['sunting_struktur'])) {
  sunting__struktur();
}

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
      <b><p style="font-size: 19px;">Tentang/Struktur</p></b>
      <hr>
    </div>

    <div>
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Struktur</th>
          <th>Kategori</th>
          <th>#</th>
        </tr>
<?php 
$i = 1;
foreach (select__struktur() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            <a href="<?= url() ?>adm/dkc/adm/assets/file/struktur/<?= $key['gambar'] ?>">
              <img src="<?= url() ?>adm/dkc/adm/assets/file/struktur/<?= $key['gambar'] ?>" style="width: 200px;">
            </a>
          </td>
          <td><b><?= $key['kategori'] ?></b></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-struktur<?= $key['id'] ?>">
              <button type="button" class="btn btn-info btn-sm struktur" data-toggle="tooltip" title="Sunting Struktur">
                <i class="fa fa-edit"></i>
              </button>
            </div>

            <div class="modal fade" id="sunting-struktur<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-struktur<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-struktur<?= $key['id'] ?>" style="font-size: 18px;">Sunting Struktur</p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                      <input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
                      <input type="text" name="gambar_lama" value="<?= $key['gambar'] ?>" class="form-control" hidden>
                      <p style="text-align: left;"><b>Gambar</b></p>
                      <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="sunting_struktur" class="btn btn-primary">Simpan</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </form>  
                </div>
              </div>
            </div>

          </td>
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
  $('.struktur').tooltip({ boundary: 'window' })
</script>  

</body>
</html>
