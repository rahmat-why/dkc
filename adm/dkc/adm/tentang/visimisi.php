<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['sunting_visimisi'])) {
	sunting__visimisi();
}

if (isset($_POST['insert_visimisi'])) {
	insert__visimisi();
}

if (isset($_POST['sunting_gambarvisimisi'])) {
	sunting__gambarvisimisi();
}

if (isset($_POST['hapus_visimisi'])) {
	hapus__visimisi();
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
      <p style="font-size: 19px;">Tentang/<b>Visi & Misi</p></b>
      <div style="text-align: right;">
	  	<div data-toggle="modal" data-target="#tambah-visimisi">
          <button type="button" class="btn btn-primary visimisi" data-toggle="tooltip" title="Upload visi/misi">
            <i class="fa fa-upload"></i>
          </button>
        </div>

	  	<div class="modal fade" id="tambah-visimisi" tabindex="-1" role="dialog" aria-labelledby="tambah-visimisi" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <b><p class="modal-title" id="tambah-visimisi" style="font-size: 18px;">Tambah visi/misi</p></b>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="" method="POST">
		      	  <div class="modal-body">
			      	<p style="text-align: left;"><b>Kategori</b></p>
			      	<select name="kategori" class="form-control">
			      		<option value="visi">Visi</option>
			      		<option value="misi">Misi</option>
			      	</select><br>
			        <p style="text-align: left;"><b>Isi</b></p>
					<input type="text" name="isi" class="form-control" placeholder="Isi Visi/Misi"><br>
			      </div>
			      <div class="modal-footer">
			      	<button type="submit" name="insert_visimisi" class="btn btn-primary">Simpan</button>
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
    			<th>Isi</th>
    			<th>Kategori</th>
    			<th>#</th>
    		</tr>
<?php 
$i = 1;
foreach (select__visimisi() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td><?= $key['isi'] ?></td>
    			<td><b><?= $key['kategori'] ?></b></td>
    			<td>
				  	<div data-toggle="modal" data-target="#sunting-visimisi<?=$key['id'] ?>">
			          <button type="button" class="btn btn-info btn-sm visimisi" data-toggle="tooltip" title="Sunting visi/misi">
			            <i class="fa fa-edit"></i>
			          </button>
			        </div>

				  	<div class="modal fade" id="sunting-visimisi<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-visimisi<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <b><p class="modal-title" id="sunting-visimisi<?= $key['id'] ?>" style="font-size: 18px;">Sunting <?= $key['kategori'] ?></p></b>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="" method="POST">
					      	  <div class="modal-body">
					      	  	<input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" hidden>
						        <p style="text-align: left;"><b>Isi</b></p>
								<textarea class="form-control" name="isi"><?= $key['isi'] ?></textarea>
						      </div>
						      <div class="modal-footer">
						      	<button type="submit" name="sunting_visimisi" class="btn btn-primary">Simpan</button>
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						      </div>
					      </form>
					    </div>
					  </div>
					</div>

					<br>

				  	<div data-toggle="modal" data-target="#hapus-visimisi<?= $key['id'] ?>">
			          <button type="button" class="btn btn-danger btn-sm visimisi" data-toggle="tooltip" title="Hapus visi/misi">
			            <i class="fa fa-trash"></i>
			          </button>
			        </div>

				  	<div class="modal fade" id="hapus-visimisi<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-visimisi<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <b><p class="modal-title" id="hapus-visimisi<?= $key['id'] ?>" style="font-size: 18px;">Hapus <?= $key['kategori'] ?></p></b>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="" method="POST">
					      	  <div class="modal-body">
						      	<p>
						      		<input type="text" name="id" value="<?= $key['id'] ?>" hidden>
						      		<b>Isi</b><br>
						      		<?= $key['isi'] ?>
						      	</p>
						      </div>
						      <div class="modal-footer">
						      	<button type="submit" name="hapus_visimisi" class="btn btn-danger">Hapus</button>
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

    <div>
    	<table class="table table-bordered">
    		<tr>
    			<th>#</th>
    			<th>Gambar</th>
    			<th>Kategori</th>
    			<th>#</th>
    		</tr>
<?php 
$i = 1;
foreach (select__gambarvisimisi() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td><img src="<?= url() ?>adm/dkc/adm/assets/file/visimisi/<?=$key['gambar'] ?>" style="width: 100px;"></td>
    			<td>
    				<b>
    					<?php 
    						$kat = $key['kategori'];
    						if ($kat == '1VISI1') {
    							echo "Visi";
    						}else if ($kat == '1MISI1') {
    							echo "Misi";
    						}
    					?>
    				</b>
    			</td>
    			<td>
				  	<div data-toggle="modal" data-target="#sunting-gambarvisimisi<?= $key['id'] ?>">
		              <button type="button" class="btn btn-info btn-sm visimisi" data-toggle="tooltip" title="Sunting">
		                <i class="fa fa-edit"></i>
		              </button>
		            </div>

				  	<div class="modal fade" id="sunting-gambarvisimisi<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-gambarvisimisi<?= $key['id'] ?>" aria-hidden="true">
  					  <div class="modal-dialog" role="document">
  					    <div class="modal-content">
  					      <div class="modal-header">
  					      	<div class="tex-left">
  					      		<b><p class="modal-title" id="sunting-gambarvisimisi<?= $key['id'] ?>" style="font-size: 18px; text-align: left;">Sunting Gambar</b>
  					      	</div>
  					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					          <span aria-hidden="true">&times;</span>
  					        </button>
  					      </div>
  					      <form action="" method="POST" enctype="multipart/form-data">
  					      	  <div class="modal-body">
			                        <input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" hidden>
			                        <input type="text" name="gambar_lama" class="form-control" value="<?= $key['gambar'] ?>" hidden>
			                        <input type="text" name="kategori" class="form-control" value="<?= $key['kategori'] ?>" hidden>
      								<p style="text-align: left;"><b>Gambar</b></p>
                      				<p style="color: red; text-align: right;">PNG / JPG</p>
      								<input type="file" name="gambar" class="form-control" placeholder="Gambar"><br>
  						      </div>
  						      <div class="modal-footer">
  						      	<button type="submit" name="sunting_gambarvisimisi" class="btn btn-primary">Simpan</button>
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
	  $('.visimisi').tooltip({ boundary: 'window' })
	</script>

</body>
</html>
