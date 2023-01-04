<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['submit_aturan'])) {
  insert__aturan();
}

if (isset($_POST['sunting_aturan'])) {
  sunting__aturan();
}

if (isset($_POST['hapus_aturan'])) {
  hapus__aturan();
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
      <b><p style="font-size: 19px;">Aturan</p></b>
      <div style="text-align: right;">
        <div data-toggle="modal" data-target="#tambah-aturan">
          <button type="button" class="btn btn-primary aturan" data-toggle="tooltip" title="Upload aturan">
            <i class="fa fa-upload"></i>
          </button>
        </div>

        <div class="modal fade" id="tambah-aturan" tabindex="-1" role="dialog" aria-labelledby="tambah-aturan" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <b><p class="modal-title" id="tambah-aturan" style="font-size: 18px;">Tambah Aturan</p></b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                  <p style="text-align: left;"><b>Nama File</b></p>
                  <input type="text" name="kategori" class="form-control">
                  <br>
                  <p style="text-align: left;"><b>File</b></p>
                  <input type="file" name="file" class="form-control">
                </div>
                <div class="modal-footer">
                  <button type="submit" name="submit_aturan" class="btn btn-primary">Simpan</button>
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
          <th>File</th>
          <th>Nama File</th>
          <th>#</th>
        </tr>
<?php 
$i = 1;
foreach (select__aturan() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
          	<?php 
          		if ($key['ekstensi'] == 'pdf') {
          			echo "<img src='../assets/img/pdf.png' style='width:100px;'>";
          		}elseif ($key['ekstensi'] == 'docx') {
          			echo "<img src='../assets/img/docx.png' style='width:100px;'>";
          		}
          	?>
          </td>
          <td><b><?= $key['kategori'] ?></b></td>
          <td>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#sunting-struktur<?= $key['id'] ?>">
              <i class="fa fa-edit"></i>
            </button>

            <div class="modal fade" id="sunting-struktur<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-struktur<?= $key['id'] ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <b><p class="modal-title" id="sunting-struktur<?= $key['id'] ?>" style="font-size: 18px;">Sunting Aturan</p></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                      <input type="text" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
                      <input type="text" name="file_lama" value="<?= $key['file'] ?>" class="form-control" hidden>
                      <p style="text-align: left;"><b>File <?= $key['kategori'] ?></b></p>
                      <input type="file" name="file" class="form-control">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="sunting_aturan" class="btn btn-primary">Simpan</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </form>  
                </div>
              </div>
            </div>

            <div data-toggle="modal" data-target="#hapus-aturan<?= $key['id'] ?>">
              <button type="button" class="btn btn-danger btn-sm aturan" data-toggle="tooltip" title="Hapus">
                <i class="fa fa-trash"></i>
              </button>
            </div>

				  	<div class="modal fade" id="hapus-aturan<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-aturan<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <b><p class="modal-title" id="hapus-aturan<?= $key['id'] ?>" style="font-size: 18px;">Hapus Aturan</p></b>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="" method="POST" enctype="">
					      	<div class="modal-body">
					      		<input type="text" name="id" class="form-control" placeholder="id" value="<?= $key['id'] ?>" hidden>
					      		<input type="text" name="file_lama" class="form-control" placeholder="File" value="<?= $key['file'] ?>" hidden>
								<p>Nama File: <?= $key['kategori'] ?></p>
						    </div>
						    <div class="modal-footer">
						      	<button type="submit" name="hapus_aturan" class="btn btn-danger">Hapus</button>
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
  <!-- page-content" -->
</div>
<!-- page-wrapper -->

<script src="<?= url() ?>assets/js/jquery.min.js"></script>
<script src="<?= url() ?>assets/js/bootstrap4.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
<script> 
  $(function(){
    $(".header").load("<?= url() ?>adm/dkc/adm/assets/property/header.php"); 
  });
</script>

</body>
</html>
