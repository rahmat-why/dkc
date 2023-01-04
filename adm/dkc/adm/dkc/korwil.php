<?php

session_start();

require '../f/fungsi/fungsi.php';

require '../../auth.php';

if (isset($_POST['sunting_rencanakerja'])) {
  sunting__korwil();
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
      <p style="font-size: 19px;">DKC/<b>Koordinator Wilayah</p></b>
      <div style="text-align: right;">

      </div>
      <hr>
    </div>

    <div>
      <table class="table table-bordered">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Wilayah</th>
          <th>#</th>
        </tr>
<?php 
$i = 1;
foreach (select__korwil() as $key): 
?>        
        <tr>
          <td><?= $i++; ?></td>
          <td>
            <a href="<?= url() ?>adm/dkc/adm/assets/file/korwil/<?= $key['gambar'] ?>">
              <img src="<?= url() ?>adm/dkc/adm/assets/file/korwil/<?= $key['gambar'] ?>" style="width: 200px;">
            </a>
          </td>
          <td><?= $key['nama'] ?></td>
          <td><?= $key['wilayah'] ?></td>
          <td>
          	<div data-toggle="modal" data-target="#sunting-rencanakerja<?= $key['id'] ?>">
              <button type="button" class="btn btn-info btn-sm korwil" data-toggle="tooltip" title="Sunting Korwil">
                <i class="fa fa-edit"></i>
              </button>
            </div>

            <div class="modal fade" id="sunting-rencanakerja<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="sunting-rencanakerja<?= $key['id'] ?>" aria-hidden="true">
  				<div class="modal-dialog" role="document">
  				    <div class="modal-content">
  				      <div class="modal-header">
  				        <b><p class="modal-title" id="sunting-rencanakerja<?= $key['id'] ?>" style="font-size: 18px;">Sunting Korwil</p></b>
  				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  				          <span aria-hidden="true">&times;</span>
  				        </button>
  				      </div>
		  		        <form action="" method="POST" enctype="multipart/form-data">
  		  			    	<div class="modal-body">
  		                  <input type="text" name="id" class="form-control" value="<?= $key['id'] ?>" hidden>
                        <input type="text" name="gambar_lama" class="form-control" value="<?= $key['gambar'] ?>" hidden>
                        <input type="text" name="wilayah" class="form-control" value="<?= $key['wilayah'] ?>" hidden>
  		  				        <p style="text-align: left;"><b>Gambar</b></p>
  		      					  <input type="file" name="gambar" class="form-control"><br>
                        <p style="text-align: left;"><b>Nama</b></p>
                        <input type="text" name="nama" class="form-control" value="<?= $key['nama'] ?>" placeholder="Nama Koordinator"><br>
                        <p style="text-align: left;"><b>Wilayah</b></p>
                        <select class="form-control" disabled>
                          <option <?php if ($key['wilayah'] == 'wilayah 1') {
                            echo "selected";
                            } ?> value="wilayah 1">wilayah 1
                          </option>
                          <option <?php if ($key['wilayah'] == 'wilayah 2') {
                            echo "selected";
                            } ?> value="wilayah 2">wilayah 2
                          </option>
                          <option <?php if ($key['wilayah'] == 'wilayah 3') {
                            echo "selected";
                            } ?> value="wilayah 3">wilayah 3
                          </option>
                          <option <?php if ($key['wilayah'] == 'wilayah 4') {
                            echo "selected";
                            } ?> value="wilayah 4">wilayah 4
                          </option>
                          <option <?php if ($key['wilayah'] == 'wilayah 5') {
                            echo "selected";
                            } ?> value="wilayah 5">wilayah 5
                          </option>
                        </select>
  		  					  </div>
    		  					<div class="modal-footer">
    		  					  	<button type="submit" name="sunting_rencanakerja" class="btn btn-primary">Simpan</button>
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
  $('.korwil').tooltip({ boundary: 'window' })
</script>

</body>
</html>
