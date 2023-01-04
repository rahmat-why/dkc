<?php

require '../fungsi.php';

if (isset($_POST['submit'])) {
	sunting__berita();
}	

$id = $_GET['id'];
$sunting = mysqli_query($conn, "SELECT * FROM berita WHERE id = '$id'");
$key = mysqli_fetch_assoc($sunting);

$menu = 'Sunting Berita';

?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $menu ?></title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="icon" type="image/png" href="../../../../assets/img/logo.png">	
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="https://repo.rachmat.id/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
  	  $(function(){
	    $("#date").datepicker({
		   dateFormat:"dd-mm-yy",
	    });
	  });
  </script>
</head>
<body>

<br>

<div class="container-fluid">
	<div style="text-align: left;">
		<a href="javascript:window.history.back()">
			<button type="button" class="btn btn-danger">
				<i class="fa fa-angle-left"></i>
			</button>
		</a>
    </div>
</div>
<div class="container-fluid" style="margin-top: 50px;">	
    <p style="font-size: 19px;">Beranda/<b><?= $menu ?></b></p>
     <hr>
</div>

<div class="container-fluid">
	<br>
	<br>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="row">
			<input type="hidden" name="id" value="<?= $key['id'] ?>" class="form-control" >
			<input type="hidden" name="gambar_lama" value="<?= $key['gambar'] ?>" class="form-control">
			<div class="col-md-4">
				<input type="file" name="gambar" class="form-control"><br>	
				<img src="../../../assets/file/berita/<?= $key['gambar'] ?>" style="width: 200px; padding-bottom: 20px;">
			</div>
			<div class="col-md-4">
				<b><input type="text" name="judul" class="form-control" placeholder="judul" value="<?= $key['judul'] ?>"></b><br>
			</div>
		</div>
		<textarea name="isi"><?= $key['isi'] ?></textarea>
		<br>
		<br>	
		<button type="submit" name="submit" class="btn btn-primary btn-sm">
			Simpan
		</button>
	</form>
</div>

<br>
<br>


<script>
	CKEDITOR.replace( 'isi' );
</script>

</body>
</html>