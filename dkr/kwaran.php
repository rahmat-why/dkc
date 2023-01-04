<?php

require '../adm/dkc/adm/f/fungsi/fungsi.php';

$kwaran = $_GET['kwaran'];

$thn = mysqli_fetch_assoc(select__thn());

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DKC Kab. Bogor</title>
  <link rel="icon" type="image/png" href="<?= url(); ?>assets/img/logo.png"> 
  <link rel='stylesheet' href='<?= url(); ?>assets/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="<?= url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
  <script src="<?= url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= url() ?>assets/js/popper.min.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->

<div id="header">
  
</div>

<center>
	<div class="container-fluid">
		<div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);">
			<div class="row">
				<h1><p class="card-title" style="font-size: 18px; text-align: center; font-family: 'Fredoka One';">Kwaran <?= $kwaran ?></p></h1>
				<br>

				<div class="col-md-12">

					<b style="text-align: left;"><p>Struktur Organisasi</p></b>
					<br>
<?php foreach (select___strukturorganisasi() as $key): ?>  					
						<br>
							<img src="<?= url() ?>adm/dkrr/adm/assets/file/strukturorganisasi/<?= $key['gambar'] ?>" class="img-responsive">
							<div class="row">
								<br>
								<div class="col-md-6">
								 	<p style="text-align: left;" data-toggle="modal" data-target="#strukturorganisasi<?= $key['id'] ?>"><i class="fa fa-eye"></i></p>
								</div>
									
							    <div class="modal fade" id="strukturorganisasi<?= $key['id'] ?>" role="dialog">
							      <div class="modal-dialog">
							                    
							      <center>
								    <div class="modal-content">
								      <div class="modal-header">
								         <button type="button" class="close" data-dismiss="modal">&times;</button>
								      </div>
								      <div class="modal-body">
								         <img src="<?= url() ?>adm/dkrr/adm/assets/file/strukturorganisasi/<?= $key['gambar'] ?>" class="img-responsive">
								      </div>
								    </div>
							      </center>
							                      
							      </div>
							    </div>
							</div>
						<br>
<?php endforeach; ?>   			
					<br>
					<br>
					<hr>
					<b style="text-align: left;"><p>SK DKR</p></b>
<?php foreach (select___skdkr() as $key): ?>        					          	
						<br>

						<a href="<?= url() ?>adm/dkrr/adm/assets/file/skdkr/<?= $key['file'] ?>">Unduh disini</a>

						<br>
<?php endforeach; ?>   			
					<br>
					<hr>
					<b style="text-align: left;"><p>Program Kerja</p></b>        					          	
					<br>
					<div class="table-responsive">
						<table class="table table-bordered" style="color: black;">
							   <thead>
							     <tr>
							        <th rowspan="2" scope="col"><b>#</b></th>
							        <th rowspan="2" scope="col"><b>Kegiatan</b></th>
							        <th colspan="12" scope="col"><center><b>Pelaksanaan Tahun <?= $thn['thn1'] ?>/<?= $thn['thn2'] ?></b></center></th>
							     </tr>
							     <tr>
							        <th scope="col">1</th>
							        <th scope="col">2</th>
							        <th scope="col">3</th>
							        <th scope="col">4</th>
							        <th scope="col">5</th>
							        <th scope="col">6</th>
							        <th scope="col">7</th>
							        <th scope="col">8</th>
							        <th scope="col">9</th>
							        <th scope="col">10</th>
							        <th scope="col">11</th>
							        <th scope="col">12</th>
							     </tr>
							   </thead>
							   <tbody>
<?php $i = 1; ?>           							   	
<?php foreach (select___programkerja() as $key): ?>						        	
								 <tr>
							       <th scope="row"><?= $i++; ?></th>
							       <td><?= $key['kegiatan'] ?></td>
							       <td <?= $key['bulan1'] ?>> </td>
							       <td <?= $key['bulan2'] ?>> </td>
							       <td <?= $key['bulan3'] ?>> </td>
							       <td <?= $key['bulan4'] ?>> </td>
							       <td <?= $key['bulan5'] ?>> </td>
							       <td <?= $key['bulan6'] ?>> </td>
							       <td <?= $key['bulan7'] ?>> </td>
							       <td <?= $key['bulan8'] ?>> </td>
							       <td <?= $key['bulan9'] ?>> </td>
							       <td <?= $key['bulan10'] ?> ></td>
							       <td <?= $key['bulan11'] ?> ></td>
							       <td <?= $key['bulan12'] ?> ></td>
								 </tr>		
<?php endforeach; ?>   			    
							   </tbody>
						</table>
					</div>	
					<br>
					<hr>

					<b style="text-align: left;"><p>Data Potensi</p></b>     					          	
					<br>

					<div class="table-responsive">
						<table class="table table-bordered" style="color: black;">
	        				<thead>
								<tr>
							    	<th rowspan="2" scope="col"><b>#</b></th>
							    	<th rowspan="2" scope="col"><b>No. Gudep</b></th>
							    	<th rowspan="2" scope="col"><b>Sanggar Bakti</b></th>
							    	<th colspan="2" scope="col"><b>Calon Penegak</b></th>
							    	<th colspan="2" scope="col"><b>Penegak Bantara</b></th>
							    	<th colspan="2" scope="col"><b>Penegak Laksana</b></th>
							    	<th colspan="2" scope="col"><b>Penegak Garuda</b></th>
							    	<th colspan="2" scope="col"><b>Calon Pandega</b></th>
							    	<th colspan="2" scope="col"><b>Pandega</b></th>
							    	<th colspan="2" scope="col"><b>Pandega Garuda</b></th>
							    	<th colspan="2" scope="col"><b>Jumlah</b></th>
							    </tr>
							    <tr>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    	<th scope="col"><b>PA</b></th>
							    	<th scope="col"><b>PI</b></th>
							    </tr>
							</thead>
							<tbody>
<?php $i = 1; ?>           								
<?php foreach (select___gudep() as $key): ?>   						        	
							    <tr>
								    <th scope="row"><?= $i++; ?></th>
								    <td><?= $key['nogudep'] ?></td>
								    <td><?= $key['sanggarbakti'] ?></td>
								    <td><?= $key['capenpa'] ?></td>
								    <td><?= $key['capenpi'] ?></td>
								    <td><?= $key['penbanpa'] ?></td>
								    <td><?= $key['penbanpi'] ?></td>
								    <td><?= $key['penlakpa'] ?></td>
								    <td><?= $key['penlakpi'] ?></td>
								    <td><?= $key['pengarpa'] ?></td>
								    <td><?= $key['pengarpi'] ?></td>
								    <td><?= $key['capanpa'] ?></td>
								    <td><?= $key['capanpi'] ?></td>
								    <td><?= $key['panpa'] ?></td>
								    <td><?= $key['panpi'] ?></td>
								    <td><?= $key['pangarpa'] ?></td>
								    <td><?= $key['pangarpi'] ?></td>
								    <td><?= $key['jumlahpa'] ?></td>
								    <td><?= $key['jumlahpi'] ?></td>
								</tr>
<?php endforeach; ?> 							            
							    </tbody>
							</table>
						</div>
				</div>
			</div>
		</div>
	</div>
</center>

<!-- footer -->
<center id="footer">
  
</center>

<script src='<?= url() ?>assets/js/bootstrap.min.js'></script>

<script> 
    $(function(){
      $("#header").load("<?= url(); ?>assets/property/header.php");
    });
</script>

<script> 
    $(function(){
      $("#footer").load("<?= url(); ?>assets/property/footer.html"); 
    });
</script>

</body>
</html>
