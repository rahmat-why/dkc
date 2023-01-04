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
					<th scope="col">#</th>
					<th scope="col">Kegiatan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">File</th>
					<th scope="col">Jumlah</th>
				</tr>
			</thead>


	<?php 

	$i = 1;
	foreach (select__suratedaran() as $key):

	?>	



				<tr>
				  	<th scope="row"><?= $i++; ?></th>
				    <td><?= $key['nogudep'] ?></td>
				    <td><?= $key['sanggarbakti'] ?></td>
				    <td><?= $key['calonpa'] ?></td>
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