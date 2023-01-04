<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['submit_agenda'])) {
  insert__agenda();
}

if (isset($_POST['sunting_agenda'])) {
  sunting__agenda();
}

if (isset($_POST['hapus_agenda'])) {
  hapus__agenda();
}

$menu = 'Agenda';

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

<link rel="stylesheet" href="<?= url() ?>assets/css/jquery-ui.css">
<script src="<?= url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= url() ?>assets/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?= url() ?>assets/js/jquery-ui.js"></script>
  <script type="text/javascript">
      $(function(){
      $(".date").datepicker({
       dateFormat:"dd/M",
      });
    });
  </script>

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
      	<div data-toggle="modal" data-target="#tambah-agenda">
          <button type="button" class="btn btn-primary agenda" data-toggle="tooltip" title="Upload">
            <i class="fa fa-upload"></i>
          </button>
        </div>

        <div class="modal fade" id="tambah-agenda" tabindex="-1" role="dialog" aria-labelledby="tambah-agenda" aria-hidden="true">
  	      <div class="modal-dialog" role="document">
  	        <div class="modal-content">
  	          <div class="modal-header">
  	            <b><p class="modal-title" id="tambah-agenda" style="font-size: 18px;">Tambah <?= $menu ?></p></b>
  	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  	              <span aria-hidden="true">&times;</span>
  	            </button>
  	          </div>
  	          <form action="" method="POST" enctype="multipart/form-data">
  	            <div class="modal-body">
  	              <p style="text-align: left;"><b>Judul</b></p>
  	              <input type="text" name="judul" class="form-control" placeholder="Judul"><br>
  	              <p style="text-align: left;"><b>Bulan/Tahun</b></p>
  	              <input name="tanggal" class="form-control date" placeholder="Tanggal"><br>
  	            </div>
  	          <div class="modal-footer">
  	              <button type="submit" name="submit_agenda" class="btn btn-primary">Simpan</button>
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
          <th>Judul</th>
    			<th>Tanggal</th>
          <th>Bulan</th>
    			<th>#</th>
    		</tr>
<?php 
$i = 1;
foreach (select__agenda() as $key): 
?>    		
    		<tr>
    			<td><?= $i++; ?></td>
          <td><?= $key['judul'] ?></td>
    			<td><?= $key['tanggal'] ?></td>
          <td><?= $key['bulan'] ?></td>
    			<td>
				  	<div data-toggle="modal" data-target="#sunting-agenda<?= $key['id'] ?>">
			          <button type="button" class="btn btn-info btn-sm agenda" data-toggle="tooltip" title="Sunting">
			            <i class="fa fa-edit"></i>
			          </button>
			      </div>

            <div class="modal fade" id="sunting-agenda<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-agenda<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-agenda<?= $key['id'] ?>" style="font-size: 18px;">Tambah <?= $menu ?></p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                      <p style="text-align: left;"><b>Judul</b></p>
                      <input type="text" name="judul" class="form-control" placeholder="Judul" value="<?= $key['judul'] ?>"><br>
                      <p style="text-align: left;"><b>Bulan/Tahun</b></p>
                      <input name="tanggal" class="form-control date" placeholder="Tanggal" value="<?= $key['tanggal'] ?>/<?= $key['bulan'] ?>"><br>
                    </div>
                  <div class="modal-footer">
                      <button type="submit" name="submit_agenda" class="btn btn-primary">Simpan</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

  					<br>

  					<div data-toggle="modal" data-target="#hapus-agenda<?= $key['id'] ?>">
			          <button type="button" class="btn btn-danger btn-sm agenda" data-toggle="tooltip" title="Hapus">
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
                		  <form action="" method="POST" enctype="multipart/form-data">
                  			<div class="modal-body">
                    		  <input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>

                    		  <p>Judul <br> <b><?= $key['judul'] ?></b></p>
                    		  <p>Tanggal <br> <b><?= $key['tanggal'] ?></b></p>
                          <p>Bulan <br> <b><?= $key['bulan'] ?></b></p>

                  			</div>
                  		  <div class="modal-footer">
                      		<button type="submit" name="hapus_agenda" class="btn btn-danger">Hapus</button>
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

<script src="<?= url() ?>adm/dkrr/adm/assets/js/script.js"></script>
<script src="<?= url() ?>assets/js/bootstrap4.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
<script> 
  $(function(){
    $(".header").load("<?= url() ?>adm/dkc/adm/assets/property/header.php"); 
  });
</script>

<script>
  $('.agenda').tooltip({ boundary: 'window' })
</script>  

</body>
</html>
