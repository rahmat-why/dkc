<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['ubah'])) {
	insert__menu();
}

$menu = 'Akun';

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
      <p style="font-size: 19px;">Menu<b></p></b>
      <div style="text-align: right;">
        
 


      </div>
      <hr>
    </div>

    <div class="row">
    	<table class="table table-bordered">
    		<tr>
    			<th>#</th>
          <th>Menu</th>
    			<th>Gambar</th>
          <th>Judul Introduction</th>
          <th>Deskripsi</th>
    		</tr>
<?php $i = 1; ?>    		
<?php foreach (select__menu() as $key): ?>    		
    		<tr>
    			<td><?= $i++; ?></td>
          <td><?= $key['menu'] ?></td>
    			<td><a href="<?= url() ?>adm/dkc/adm/assets/file/menu/<?=$key['gambar'];?>"><img src="<?= url() ?>adm/dkc/adm/assets/file/menu/<?=$key['gambar'];?>" style="width: 200px;"></a></td>
          <td><?= $key['judul'] ?></td>
          <td><?= $key['deskripsi'] ?></td>
          <td>
            <div data-toggle="modal" data-target="#sunting-menu<?= $key['id'] ?>">
                <button type="button" class="btn btn-info btn-sm menu" data-toggle="tooltip" title="Sunting">
                  <i class="fa fa-edit"></i>
                </button>
            </div>

            <div class="modal fade" id="sunting-menu<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-agenda<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-agenda<?= $key['id'] ?>" style="font-size: 18px;">Sunting Menu</p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" enctype="multipart/form-data" method="POST">
                    <div class="modal-body">
                      <input type="text" name="id" value="<?= $key['id'] ?>" hidden>
                  
                      <input type="text" name="gambarlama" value="<?=$key['gambar'];?>" hidden>


               
                      <p style="text-align: left;"><b>Gambar</b></p>
                      <span><p style="color: red; text-align: right;">PNG / JPG</p></span>
                      <input type="file" name="gambar" class="form-control"><br>

                      <p style="text-align: left;"><b>Judul Introduction</b></p>
                      <input type="text" name="judul" value="<?= $key['judul'] ?>" class="form-control">

                      <br>

                      <p style="text-align: left;"><b>Deskripsi</b></p >
                      <textarea name="deskripsi" class="form-control"><?= $key['deskripsi'] ?></textarea>
                    </div>
                  <div class="modal-footer">
                      <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
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
  $('.layer').tooltip({ boundary: 'window' })
</script>

</body>
</html>
