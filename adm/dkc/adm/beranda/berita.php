<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['hapus_berita'])) {
	hapus__berita();
}

$menu = 'Berita';

?>

<!DOCTYPE html>
<html lang="en" >
<head>
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
      <p style="font-size: 19px;">Beranda/<b><?= $menu ?></p></b>
      <div style="text-align: right;">
      	<a href="<?= url() ?>adm/dkc/adm/f/fungsi/tambah/tambah_berita.php">
      		<button type="button" class="btn btn-primary berita" data-toggle="tooltip" title="Upload">
				<i class="fa fa-upload"></i>
		  	</button>
      	</a>
      </div>
      <hr>
    </div>

    <div class="table-responsive">
    	<table class="table table-bordered">
    		<tr>
    			<th>#</th>
    			<th>Gambar</th>
    			<th>Judul</th>
    			<th>Isi</th>
    			<th>#</th>
    		</tr>
<?php 
$i = 1;
foreach (select__berita() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td>
    				<a href="<?= url() ?>adm/dkc/adm/assets/file/berita/<?= $key['gambar'] ?>">
    					<img src="<?= url() ?>adm/dkc/adm/assets/file/berita/<?= $key['gambar'] ?>" style="width: 200px;">
    				</a>
    			</td>
    			<td><b><?= $key['judul'] ?></b></td>
    			<td><?= $key['isi'] ?></td>
    			<td>
    				<a href="<?= url() ?>adm/dkc/adm/f/fungsi/sunting/sunting_berita.php?id=<?= $key['id'] ?>">
			      		<button type="button" class="btn btn-info btn-sm berita" data-toggle="tooltip" title="Sunting">
							<i class="fa fa-edit"></i>
					  	</button>
			      	</a>

					<br><br>

					  <div data-toggle="modal" data-target="#hapus-berita<?= $key['id'] ?>">
		          <button type="button" class="btn btn-danger btn-sm berita" data-toggle="tooltip" title="Hapus">
		            <i class="fa fa-trash"></i>
		          </button>
		        </div>

				  	<div class="modal fade" id="hapus-berita<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-berita<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <b><p class="modal-title" id="hapus-berita<?= $key['id'] ?>" style="font-size: 18px;">Hapus <?= $menu ?></p></b>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="" method="POST">
					      	<div class="modal-body">
					      		<input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" placeholder="id" hidden>
						      	<input type="text" name="gambar_lama" class="form-control" value="<?= $key['gambar'] ?>" placeholder="Nama 
						      	Gambar" hidden>
						      	<p>
						      		<b><?= $key['judul'] ?></b>
						      	</p>
						      	<p>
						      		<img src="assets/file/berita/<?= $key['gambar'] ?>" style="width: 200px;">
						      	</p>
						      	<p><?= $key['isi'] ?></p>
						        
						      </div>
						      <div class="modal-footer">
						      	<button type="submit" name="hapus_berita" class="btn btn-danger">Hapus</button>
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
  	$('.berita').tooltip({ boundary: 'window' })
  </script>

</body>
</html>
