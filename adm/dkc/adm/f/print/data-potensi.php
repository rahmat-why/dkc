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
					<th rowspan="2" scope="col">#</th>
					<th rowspan="2" scope="col">No. Gudep</th>
					<th rowspan="2" scope="col">Sanggar Bakti</th>
					<th colspan="2" scope="col">Calon</th>
					<th colspan="2" scope="col">Mula</th>
					<th colspan="2" scope="col">Bantu</th>
					<th colspan="2" scope="col">Tata</th>
					<th colspan="2" scope="col">Garuda</th>
					<th colspan="2" scope="col">Jumlah</th>
				</tr>
				<tr>
					<th scope="col">PA</th>
					<th scope="col">PI</th>
					<th scope="col">PA</th>
					<th scope="col">PI</th>
					<th scope="col">PA</th>
					<th scope="col">PI</th>
					<th scope="col">PA</th>
					<th scope="col">PI</th>
					<th scope="col">PA</th>
					<th scope="col">PI</th>
					<th scope="col">PA</th>
					<th scope="col">PI</th>
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
				    <td><?= $key['calonpa'] ?></td>
				    <td><?= $key['calonpi'] ?></td>
				    <td><?= $key['mulapa'] ?></td>
				    <td><?= $key['mulapi'] ?></td>
				    <td><?= $key['bantupa'] ?></td>
				    <td><?= $key['bantupi'] ?></td>
				    <td><?= $key['tatapa'] ?></td>
				    <td><?= $key['tatapi'] ?></td>
				    <td><?= $key['garudapa'] ?></td>
				    <td><?= $key['garudapi'] ?></td>
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