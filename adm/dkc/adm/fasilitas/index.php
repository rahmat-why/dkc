<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['submit_fasilitas'])) {
	insert__fasilitas();
}

if (isset($_POST['sunting_fasilitas'])) {
	sunting__fasilitas();
}

if (isset($_POST['hapus_fasilitas'])) {
	hapus__fasilitas();
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
<body>
<div class="page-wrapper chiller-theme toggled">
  <div class="header">
  	
  </div>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <b><p style="font-size: 19px;">Fasilitas</p></b>
      <div style="text-align: right;">
	  	<div data-toggle="modal" data-target="#tambah-fasilitas">
          <button type="button" class="btn btn-primary fasilitas" data-toggle="tooltip" title="Upload Fasilitas">
            <i class="fa fa-upload"></i>
          </button>
        </div>

	  	<div class="modal fade" id="tambah-fasilitas" tabindex="-1" role="dialog" aria-labelledby="tambah-fasilitas" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <b><p class="modal-title" id="tambah-fasilitas" style="font-size: 18px;">Tambah Fasilitas</p></b>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="" method="POST" enctype="multipart/form-data">
		      	<div class="modal-body">
					<p style="text-align: left;"><b>Gambar</b></p>
					<input type="file" name="gambar" class="form-control" placeholder="Gambar"><br>
					<p style="text-align: left;"><b>Nama Fasilitas</b></p>
					<input type="text" name="nama" class="form-control" placeholder="Nama Fasilitas"><br>
			    </div>
			    <div class="modal-footer">
			      	<button type="submit" name="submit_fasilitas" class="btn btn-primary">Simpan</button>
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
    			<th>Nama Fasilitas</th>
    			<th>#</th>
    		</tr>
<?php 
$i = 1;
foreach (select__fasilitas() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td>
    				<a href="<?= url() ?>adm/dkc/adm/assets/file/fasilitas/<?= $key['gambar'] ?>">
    					<img src="<?= url() ?>adm/dkc/adm/assets/file/fasilitas/<?= $key['gambar'] ?>" style="width: 200px;">
    				</a>
    			</td>
    			<td><?= $key['nama'] ?></td>
    			<td>
				  	<div data-toggle="modal" data-target="#sunting-fasilitas<?= $key['id'] ?>">
			          <button type="button" class="btn btn-info btn-sm fasilitas" data-toggle="tooltip" title="Sunting Fasilitas">
			            <i class="fa fa-edit"></i>
			          </button>
			        </div>

				  	<div class="modal fade" id="sunting-fasilitas<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-fasilitas<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <b><p class="modal-title" id="sunting-fasilitas<?= $key['id'] ?>" style="font-size: 18px;">Sunting Fasilitas</p></b>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="" method="POST" enctype="multipart/form-data">
					      	<div class="modal-body">
					      		<input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
					      		<input type="text" name="gambar_lama" value="<?= $key['gambar'] ?>" class="form-control" hidden>
								<p style="text-align: left;"><b>Gambar</b> <i style="color: red">Abaikan jika tidak ingin diubah</i></p>
								<input type="file" name="gambar" class="form-control" placeholder="Gambar"><br>
								<img src="<?= url() ?>adm/dkc/adm/assets/file/fasilitas/<?= $key['gambar'] ?>" style="width: 90px;"><br><br>
								<p style="text-align: left;"><b>Nama Fasilitas</b></p>
								<input type="text" name="nama" class="form-control" placeholder="Nama Fasilitas" value="<?= $key['nama'] ?>">
								<br>
						    </div>
						    <div class="modal-footer">
						      	<button type="submit" name="sunting_fasilitas" class="btn btn-primary">Simpan</button>
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						    </div>
					      </form>
					    </div>
					  </div>
					</div>

					<br>

				  	<div data-toggle="modal" data-target="#hapus-fasilitas<?= $key['id'] ?>">
			          <button type="button" class="btn btn-danger btn-sm fasilitas" data-toggle="tooltip" title="Hapus Fasilitas">
			            <i class="fa fa-trash"></i>
			          </button>
			        </div>

				  	<div class="modal fade" id="hapus-fasilitas<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-fasilitas<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <b><p class="modal-title" id="hapus-fasilitas<?= $key['id'] ?>" style="font-size: 18px;">Apakah anda yakin?</p></b>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="" method="POST" enctype="multipart/form-data">
					      	<div class="modal-body">
					      		<input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
					      		<input type="text" name="fasilitas" value="<?= $key['fasilitas'] ?>" class="form-control" hidden>
								<p style="text-align: left;"><b>Gambar</b></p>
								<img src="<?= url() ?>adm/dkc/adm/assets/file/fasilitas/<?= $key['gambar'] ?>" style="width: 90px;"><br><br>
								<p>Nama Fasilitas <br> <b><?= $key['nama'] ?></b></p>
						    </div>
						    <div class="modal-footer">
						      	<button type="submit" name="hapus_fasilitas" class="btn btn-danger">Hapus</button>
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
  $('.fasilitas').tooltip({ boundary: 'window' })
</script>

</body>
</html>
