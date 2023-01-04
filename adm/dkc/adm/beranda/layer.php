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

$menu = 'Layer';

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
      <div style="text-align: right;">
        <div data-toggle="modal" data-target="#tambah-layer">
          <button type="button" class="btn btn-primary layer" data-toggle="tooltip" title="Upload">
            <i class="fa fa-upload"></i>
          </button>
        </div>

  	  	<div class="modal fade" id="tambah-layer" tabindex="-1" role="dialog" aria-labelledby="tambah-layer" aria-hidden="true">
    		  <div class="modal-dialog" role="document">
    		    <div class="modal-content">
    		      <div class="modal-header">
    		        <b><p class="modal-title" id="tambah-layer" style="font-size: 18px;">Tambah <?= $menu ?></p></b>
    		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    		          <span aria-hidden="true">&times;</span>
    		        </button>
    		      </div>
    		      <form action="" method="POST" enctype="multipart/form-data">
    		      	 <div class="modal-body">
        					<p style="text-align: left;"><b>Gambar</b></p>
                  			<p style="color: red; text-align: right;">JPG/PNG</p>
        					<input type="file" name="gambar" class="form-control" placeholder="Gambar"><br>
    			     </div>
    			     <div class="modal-footer">
    			      	<button type="submit" name="submit_layer" class="btn btn-primary">Simpan</button>
    			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    			     </div>
    		      </form>
    		    </div>
    		  </div>
    		</div>

      </div>
      <hr>
    </div>

    <div>
    	<table class="table table-bordered">
    		<tr>
    			<th>#</th>
    			<th>Gambar</th>
    			<th>#</th>
    		</tr>
<?php 
$i = 1;
foreach (select__layer() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td>
            <a href="<?= url() ?>adm/dkc/adm/assets/file/layer/<?=$key['gambar'] ?>">
              <img src="<?= url() ?>adm/dkc/adm/assets/file/layer/<?=$key['gambar'] ?>" style="width: 200px;">    
            </a>
          </td>
    			<td>
            <div data-toggle="modal" data-target="#sunting-layer<?= $key['id'] ?>">
              <button type="button" class="btn btn-info btn-sm layer" data-toggle="tooltip" title="Sunting">
                <i class="fa fa-edit"></i>
              </button>
            </div>

				  	<div class="modal fade" id="sunting-layer<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-layer<?= $key['id'] ?>" aria-hidden="true">
  					  <div class="modal-dialog" role="document">
  					    <div class="modal-content">
  					      <div class="modal-header">
  					        <b><p class="modal-title" id="sunting-layer<?= $key['id'] ?>" style="font-size: 18px;">Sunting <?= $menu ?></p></b>
  					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					          <span aria-hidden="true">&times;</span>
  					        </button>
  					      </div>
  					      <form action="" method="POST" enctype="multipart/form-data">
  					      	  <div class="modal-body">
                      <input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" hidden>
                      <input type="text" name="gambar_lama" class="form-control" value="<?= $key['gambar'] ?>" hidden>
      								<p style="text-align: left;"><b>Gambar</b></p>
                      <p style="color: red; text-align: right;">Abaikan jika tidak ingin diubah</p>
      								<input type="file" name="gambar" class="form-control" placeholder="Gambar"><br>
                      <img src="<?= url() ?>adm/dkc/adm/assets/file/layer/<?=$key['gambar'] ?>" style="width: 100px;">
  						      </div>
  						      <div class="modal-footer">
  						      	<button type="submit" name="sunting_layer" class="btn btn-primary">Simpan</button>
  						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
  						      </div>
  					      </form>
  					    </div>
  					  </div>
  					</div>

            <br>

            <div data-toggle="modal" data-target="#hapus-layer<?= $key['id'] ?>">
              <button type="button" class="btn btn-danger btn-sm layer" data-toggle="tooltip" title="Hapus">
                <i class="fa fa-trash"></i>
              </button>
            </div>

				  	<div class="modal fade" id="hapus-layer<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-layer<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <b><p class="modal-title" id="hapus-layer<?= $key['id'] ?>" style="font-size: 18px;">Hapus <?= $menu ?></p></b>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="" method="POST" enctype="">
					      	<div class="modal-body">
					      		<input type="text" name="id" class="form-control" placeholder="id" value="<?= $key['id'] ?>" hidden>
					      		<input type="text" name="gambar_lama" class="form-control" placeholder="Gambar" value="<?= $key['gambar'] ?>" hidden>
								<p>Gambar</p>
						        <img src="<?= url() ?>adm/dkc/adm/assets/file/layer/<?=$key['gambar'] ?>" style="width: 100px;">
						    </div>
						    <div class="modal-footer">
						      	<button type="submit" name="hapus_layer" class="btn btn-danger">Hapus</button>
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
