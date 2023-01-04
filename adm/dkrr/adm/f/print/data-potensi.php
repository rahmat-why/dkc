<?php

require '../fungsi/fungsi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
	<link rel="icon" type="image/png" href="../../../../assets/img/logo.png"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Print</title>
</head>
<body>

<center>
	<b><p style="font-size: 20px; margin-top: 50px;">Data Potensi Kecamatan</p></b>
	<div class="container table table-striped">
		<table class="table table-bordered" style="color: black; margin-top: 30px;">
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
				</tr>

	<?php

	endforeach;

	?>


			</tbody>
		</table>
	</div>
</center>

<script>
	window.print();
</script>
</body>
</html>