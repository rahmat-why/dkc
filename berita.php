<?php

require 'adm/dkc/adm/f/fungsi/fungsi.php';
$key = mysqli_fetch_assoc(select__beritapilihan());

?>

<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">
  <title>DKC Kab. Bogor</title>
  <link rel="icon" type="image/png" href="<?= url() ?>assets/img/logo.png"> 
  <link rel='stylesheet' href='<?= url() ?>assets/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="<?= url() ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?= url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= url() ?>assets/js/popper.min.js"></script>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<br>
		<div class="col-md-9 col-xs-12 col-sm-12">
	      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
			<div style="text-align: left;">
				<a href="javascript:window.history.back()">
					<button type="button" class="btn btn-danger">
						<i class="fa fa-angle-left"></i>
					</button>
				</a>
		    </div>
	        <div class="container-fluid row">
	          <div class="card-body">
	            <b><p class="card-title" style="font-size: 20px; text-align: center;"><?= $key['judul'] ?></p></b>
	            <hr style="margin-top: -5px; border: 1px solid black; width: 150px;">
	          </div>
	          <img src="<?= url() ?>adm/dkc/adm/assets/file/berita/<?= $key['gambar'] ?>" class="img-responsive" alt="<?= $key['judul'] ?> Kab. Bogor">
	          <br>
	          <p><?= $key['isi'] ?></p>
	          <br>
	          <br>
	          <br>
	          <p style="font-size: 11px;">Duanggah Pada	: <?= $key['tstamp'] ?></p>
	        </div>
	      </div>
	      <br><br>
	    </div>

	    <div class="col-md-3 col-xs-12 col-sm-12">
	      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
	        <div class="card-body">
	          <b><p class="card-title" style="font-size: 20px; text-align: center;">Berita Lainnya</p></b>
	          <hr style="margin-top: -5px; border: 1px solid black; width: 150px;">
	        </div>
<?php foreach (select__beritalainnya() as $key): ?>	        
	        <ul class="list-group list-group-flush">
	          <li class="list-group-item">
	            <div class="row container-fluid">
	              <div class="col-md-6 col-xs-4">
	              	<a href="<?= url() ?>berita.php?tentang=<?= $key['judul'] ?>">
	                	<img src="<?= url() ?>adm/dkc/adm/assets/file/berita/<?= $key['gambar'] ?>" style="width: 100px;">
	                </a>
	              </div>
	              <div class="col-md-6 col-xs-8">
	              	<a href="<?= url() ?>berita.php?tentang=<?= $key['judul'] ?>">
	              		<p style="color: black"><b> <?= $key['judul'] ?></b></p>
	              	</a>
	              </div>
	            </div>
	          </li>
	        </ul>
<?php endforeach; ?>	        
	      </div>
	    </div>

	</div>
</div>

</body>
</html>