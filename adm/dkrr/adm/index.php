<?php

session_start();

require 'f/fungsi/fungsi.php';

require 'auth.php';

if (isset($_POST['submit'])) {
	insert__gudep();
}

if (isset($_POST['edit_gudep'])) {
	edit__gudep();
}

if (isset($_POST['hapus_gudep'])) {
	hapus__gudep();
}

$menu = 'Data Potensi';

$gudep = 'Gugus Depan';

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Pramuka Kab. Bogor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?= url() ?>assets/img/logo.png"> 
  <link rel="stylesheet" href="<?= url() ?>adm/dkrr/adm/assets/css/style.css">
  <link rel='stylesheet' href='<?= url() ?>assets/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="<?= url() ?>assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?= url() ?>assets/css/normalize.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="header">
  
</div>
<main class="main">
  
  <div class="title-bar container-fluid">
    <h4 style="color: white">Kwaran <?= $_SESSION['username']; ?></h4>
  </div>
  
  <br>

  <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="card" style="padding: 20px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45); background-color: white;">
        <div class="row">
          <div class="card-body">
          	<div class="row">
          		<div style="text-align: right;" class="container-fluid">
          			
		            <div class="row">
		            	<div class="col-md-9 col-xs-7">

		            	</div>
		            	<div class="col-md-3 col-xs-5">
		            		<div class="row">
		            			<div class="col-md-4">
		            				
		            			</div>
		            			<div class="col-md-2 col-xs-3">
		            				<div data-toggle="modal" data-target="#tambah-gudep">
						              <button type="button" class="btn btn-primary datapotensi" data-toggle="tooltip" title="Tambah">
						                <i class="fa fa-plus"></i>
						              </button>
						            </div>
		            			</div>
		            			<div class="col-md-2 col-xs-3">
			            			<div data-toggle="modal" data-target="#export">
						              <button type="button" class="btn btn-warning datapotensi" data-toggle="tooltip" title="Export">
						                <span class="fa fa-print"></span>
						              </button>
						            </div>
								</div>			  
		            		</div>
		            	</div>
		            </div>

		            <br>
		            <br>

					<!-- Modal -->
					<div class="modal fade" id="tambah-gudep" tabindex="-1" role="dialog" aria-labelledby="tambah-gudep" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <form action="" method="POST">
						      <div class="modal-header">
						      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <b><p class="modal-title" id="tambah-gudep" style="text-align: center; font-size: 18px;">Tambah <?= $menu ?></p></b>
						      </div>
						      <div class="modal-body">
						      	<p style="text-align: left;"><b>No. Gudep</b></p>
						      	<input type="text" name="nogudep" id="nogudep" class="form-control" placeholder="No. Gudep" required><br>
						      	<p style="text-align: left;"><b>Sanggar Bakti</b></p>
						        <input type="text" name="sanggarbakti" id="sanggarbakti" class="form-control" placeholder="Sanggar Bakti" required><br>
						        <b><i><span id="message" style="color: red;"></span></i></b>
						        <!-- START SCRIPT -->

									<script type="text/javascript">
								
										var nogudep = document.getElementById('nogudep')
										var sanggarbakti = document.getElementById('sanggarbakti')
										var message = document.getElementById('message')

										nogudep.addEventListener('keyup', function(){
											if(nogudep.value == ""){
												message.textContent = 'Kolom tidak boleh kosong!'
											}
										})

										sanggarbakti.addEventListener('keyup', function(){
											if(sanggarbakti.value == ""){
												message.textContent = 'Kolom tidak boleh kosong!'
											}
										})
									</script>
						        <!-- END SCRIPT -->
						      </div>
						      <div class="modal-footer">
						      	<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						      </div>
					      </form>
					    </div>
					  </div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="export" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <form action="" method="POST">
						      <div class="modal-header">
						      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <b><p class="modal-title" id="export" style="text-align: center; font-size: 18px;">Export</p></b>
						      </div>
						      <div class="modal-body">
						      	<div class="row">
						      		<center>
							      		<div class="col-md-6">
							      			<p>Export Docs</p>
							      			<a href="f/export/docx/export.php">
							      				<button type="button" class="btn btn-info btn-xs">Export</button>
							      			</a>
							      		</div>
							      		<div class="col-md-6">
							      			<p>Export PDF</p>
							      			<a href="f/export/pdf/datapotensi.php">
							      				<button type="button" class="btn btn-danger btn-xs">Export</button>
							      			</a>
							      		</div>
						      		</center>
						      	</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						      </div>
					      </form>
					    </div>
					  </div>
					</div>

          		</div>
          		<b><p class="card-title" style="font-size: 20px; text-align: center; color: black;">Daftar <?= $menu ?></p></b>
            	<hr style="margin-top: 5px; border: 1px solid black; width: 150px;">
          	</div>
          </div>

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
			      <th rowspan="2" scope="col"><b>#</b></th>
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
<?php 

$i = 1;
foreach (select__gudep() as $key):

?>
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
			      <td>
			      	<div data-toggle="modal" data-target="#info-gudep<?= $key['id'] ?>">
		              <button type="button" class="btn btn-default datapotensi" data-toggle="tooltip" title="Info">
		                <i class="fa fa-eye"></i>
		              </button>
		            </div>

			      	<!-- Modal -->
					<div class="modal fade" id="info-gudep<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info-gudep<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					        <b><p class="modal-title" id="info-gudep<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Informasi <?= $gudep ?></p></b>
					      </div>
					      <div class="modal-body">
					      	<p>Gugus Depan</p>
							<b><p><?= $key['sanggarbakti'] ?></p></b>
							<p>No. Gudep</p>
							<b><p><?= $key['nogudep'] ?></p></b>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					      </div>
					    </div>
					  </div>
					</div>

			      	<div data-toggle="modal" data-target="#edit-gudep<?= $key['id'] ?>">
		              <button type="button" class="btn btn-info datapotensi" data-toggle="tooltip" title="Edit">
		                <i class="fa fa-edit"></i>
		              </button>
		            </div>

			      	<!-- Modal -->
					<div class="modal fade" id="edit-gudep<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit-gudep<?= $key['id'] ?>" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					        <b><p class="modal-title" id="edit-gudep<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Sunting <?= $gudep ?></p></b>
					      </div>
					      <div class="modal-body">
					      	<form action="" method="POST">
					      		<p>Gugus Depan</p>
						      	<b><p><?= $key['sanggarbakti'] ?></p></b>
						      	<p>No. Gudep</p>
						      	<b><p><?= $key['nogudep'] ?></p></b>
						      	<br>
						      	<i><b><span id="message2" style="color: red;"></span></b></i>
						      	<input type="number" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
						        <table class="table table-bordered">
						        	<tr>
						        		<th>#</th>
						        		<th><b>Ket</b></th>
						        		<th><b>PA</b></th>
						        		<th><b>PI</b></th>
						        	</tr>
						        	<tr>
						        		<td>1</td>
						        		<td>Calon Penegak</td>
						        		<td><input type="number" id="capenpa" name="capenpa" value="<?= $key['capenpa'] ?>" class="form-control"></td>
						        		<td><input type="number" id="capenpi" name="capenpi" value="<?= $key['capenpi'] ?>" class="form-control"></td>
						        	</tr>
						        	<tr>
						        		<td>2</td>
						        		<td>Penegak Bantara</td>
						        		<td><input type="number" id="penbanpa" name="penbanpa" value="<?= $key['penbanpa'] ?>" class="form-control"></td>
						        		<td><input type="number" id="penbanpi" name="penbanpi" value="<?= $key['penbanpi'] ?>" class="form-control"></td>
						        	</tr>
						        	<tr>
						        		<td>3</td>
						        		<td>Penegak Laksana</td>
						        		<td><input type="number" id="penlakpa" name="penlakpa" value="<?= $key['penlakpa'] ?>" class="form-control"></td>
						        		<td><input type="number" id="penlakpi" name="penlakpi" value="<?= $key['penlakpi'] ?>" class="form-control"></td>
						        	</tr>
						        	<tr>
						        		<td>4</td>
						        		<td>Penegak Garuda</td>
						        		<td><input type="number" id="pengarpa" name="pengarpa" value="<?= $key['pengarpa'] ?>" class="form-control"></td>
						        		<td><input type="number" id="pengarpi" name="pengarpi" value="<?= $key['pengarpi'] ?>" class="form-control"></td>
						        	</tr>
						        	<tr>
						        		<td>5</td>
						        		<td>Calon Pandega</td>
						        		<td><input type="number" id="capanpa" name="capanpa" value="<?= $key['capanpa'] ?>" class="form-control"></td>
						        		<td><input type="number" id="capanpi" name="capanpi" value="<?= $key['capanpi'] ?>" class="form-control"></td>
						        	</tr>
						        	<tr>
						        		<td>6</td>
						        		<td>Pandega</td>
						        		<td><input type="number" id="panpa" name="panpa" value="<?= $key['panpa'] ?>" class="form-control"></td>
						        		<td><input type="number" id="panpi" name="panpi" value="<?= $key['panpi'] ?>" class="form-control"></td>
						        	</tr>
						        	<tr>
						        		<td>7</td>
						        		<td>Pandega Garuda</td>
						        		<td><input type="number" id="pangarpa" name="pangarpa" value="<?= $key['pangarpa'] ?>" class="form-control"></td>
						        		<td><input type="number" id="pangarpi" name="pangarpi" value="<?= $key['pangarpi'] ?>" class="form-control"></td>
						        	</tr>
						        	<tr>
						        		<td>8</td>
						        		<td>Jumlah</td>
						        		<td><input type="number" placeholder="Otomatis diisi" class="form-control" readonly></td>
						        		<td><input type="number" placeholder="Otomatis diisi" class="form-control" readonly></td>
						        	</tr>
						        </table>
						      </div>
						      	<script type="text/javascript">
								
										var capenpa = document.getElementById('capenpa')
										var capenpi = document.getElementById('capenpi')
										var penbanpa = document.getElementById('penbanpa')
										var penbanpi = document.getElementById('penbanpi')
										var penlakpa = document.getElementById('penlakpa')
										var penlakpi = document.getElementById('penlakpi')
										var pengarpa = document.getElementById('pengarpa')
										var pengarpi = document.getElementById('pengarpi')
										var capanpa = document.getElementById('capanpa')
										var capanpi = document.getElementById('capanpi')
										var panpa = document.getElementById('panpa')
										var panpi = document.getElementById('panpi')
										var pangarpa = document.getElementById('pangarpa')
										var pangarpi = document.getElementById('pangarpi')
										var message2 = document.getElementById('message2')

										capenpa.addEventListener('keyup', function(){
											if(capenpa.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (capenpa.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (capenpa.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})

										capenpi.addEventListener('keyup', function(){
											if(capenpi.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (capenpi.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (capenpi.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})
										penbanpa.addEventListener('keyup', function(){
											if(penbanpa.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (capenpa.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (capenpa.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})

										penbanpi.addEventListener('keyup', function(){
											if(penbanpi.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (penbanpi.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (penbanpi.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})
										penlakpa.addEventListener('keyup', function(){
											if(penlakpa.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (penlakpa.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (penlakpa.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})

										penlakpi.addEventListener('keyup', function(){
											if(penlakpi.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (penlakpi.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (penlakpi.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})
										pengarpa.addEventListener('keyup', function(){
											if(pengarpa.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (pengarpa.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (pengarpa.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})

										pengarpi.addEventListener('keyup', function(){
											if(pengarpi.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (pengarpi.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (pengarpi.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})
										capanpa.addEventListener('keyup', function(){
											if(capanpa.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (capanpa.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (capanpa.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})

										capanpi.addEventListener('keyup', function(){
											if(capanpi.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (capanpi.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (capanpi.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})
										panpa.addEventListener('keyup', function(){
											if(panpa.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (panpa.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (panpa.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})

										panpi.addEventListener('keyup', function(){
											if(panpi.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (panpi.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (panpi.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})
										pangarpa.addEventListener('keyup', function(){
											if(pangarpa.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (pangarpa.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (pangarpa.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})

										pangarpi.addEventListener('keyup', function(){
											if(pangarpi.value == ""){
												message2.textContent = 'Kolom tidak boleh kosong!'
												document.getElementById('endButton').disabled = true;
											}else if (pangarpi.value < 0) {
												message2.textContent = 'angka tidak boleh kurang dari 0!'
												document.getElementById('endButton').disabled = true;
											}else if (pangarpi.value) {
												message2.textContent = ''
												document.getElementById('endButton').disabled = false;
											}
										})
									</script>
						      <div class="modal-footer">
						      	<button type="submit" class="btn btn-primary" id="endButton" name="edit_gudep">Simpan</button>
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						      </div>
					      	</form>
					      </div>
					    </div>
					  </div>

			      	<div data-toggle="modal" data-target="#hapus-gudep<?= $key['id'] ?>">
		              <button type="button" class="btn btn-danger datapotensi" data-toggle="tooltip" title="Hapus">
		                <i class="fa fa-trash"></i>
		              </button>
		            </div>

			      	<!-- Modal -->
			      	<form action="" method="POST">
			      		<div class="modal fade" id="hapus-gudep<?= $key['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapus-gudep<?= $key['id'] ?>" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						        <b><p class="modal-title" id="hapus-gudep<?= $key['id'] ?>" style="text-align: center; font-size: 18px;">Apakah anda ingin yakin?</p></b>
						      </div>
						      <div class="modal-body">
						      	<div class="modal-body">
							      	<p>Gugus Depan</p>
									<b><p><?= $key['sanggarbakti'] ?></p></b>
									<p>No. Gudep</p>
									<b><p><?= $key['nogudep'] ?></p></b>
						      	</div>
						      	<input type="number" name="id" value="<?= $key['id'] ?>" class="form-control" hidden>
						      </div>
						      <div class="modal-footer">
						      	<button type="submit" name="hapus_gudep" class="btn btn-danger">Hapus</button>
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						      </div>
						    </div>
						  </div>
						</div>
			      	</form>

			      </td>
			    </tr>
<?php endforeach; ?>
			  </tbody>
			</table>
		  </div>	
        </div>
      </div>
    </div>

</main>
 
  <script src="<?= url() ?>adm/dkrr/adm/assets/js/script.js"></script>

  <script> 
      $(function(){
        $("#header").load("<?= url() ?>adm/dkrr/adm/assets/property/header.php"); 
      });
  </script>

<script>
  $('.datapotensi').tooltip({ boundary: 'window' })
</script>  

</body>
</html>
