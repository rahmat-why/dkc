<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['hapus_pesan'])) {
	hapus__pesan();
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
      <b><p style="font-size: 19px;">Saran & Masukan</p></b>
      <hr>
    </div>

    <div>
    	<table class="table table-bordered">
    		<tr>
    			<th>#</th>
    			<th>Nama Lengkap</th>
    			<th>Email/No. Telp</th>
    			<th>Pesan</th>
    			<th>Alamat IP</th>
    			<th>#</th>
    		</tr>
<?php 
$i = 1;
foreach (select__pesan() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
    			<td><?= $key['nama_lengkap'] ?></td>
    			<td><?= $key['email_notelp'] ?></td>
    			<td><?= $key['isi'] ?></td>
    			<td><?= $key['alamat_ip'] ?></td>
    			<td>
              <div data-toggle="modal" data-target="#hapus-agenda<?= $key['id'] ?>">
                <button type="button" class="btn btn-danger btn-sm hapus" data-toggle="tooltip" title="Hapus Agenda">
                  <i class="fa fa-trash"></i>
                </button>
              </div>

				  	<div class="modal fade" id="hapus-agenda<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-agenda<?= $key['id'] ?>" aria-hidden="true">
  					  <div class="modal-dialog" role="document">
  					    <div class="modal-content">
  					      <div class="modal-header">
  					        <b><p class="modal-title" id="hapus-agenda<?= $key['id'] ?>" style="font-size: 18px;">Apakah anda yakin?</p></b>
  					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					          <span aria-hidden="true">&times;</span>
  					        </button>
  					      </div>
  					      <form action="" method="POST">
  					      		<input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
  						    <div class="modal-footer">
  						      	<button type="submit" name="hapus_pesan" class="btn btn-danger">Hapus</button>
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
  $('.hapus').tooltip({ boundary: 'window' })
</script> 

</body>
</html>
