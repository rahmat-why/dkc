<?php

require '../fungsi/fungsi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ekspor PHP ke MSWORD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		body{
			width: 1200px;
			margin: auto;
		}

	</style>
</head>
<body>
	
<?php 

foreach (select__gudep() as $key);

?>	


<table border="1">
	<thead>
		<tr>
			<th rowspan="2" scope="col"><b>#</b></th>
			<th rowspan="2" scope="col"><b>No. Gudep</b></th>
			<th rowspan="2" scope="col"><b>Sanggar Bakti</b></th>
			<th colspan="2" scope="col"><b>Calon</b></th>
			<th colspan="2" scope="col"><b>Mula</b></th>
			<th colspan="2" scope="col"><b>Bantu</b></th>
			<th colspan="2" scope="col"><b>Tata</b></th>
			<th colspan="2" scope="col"><b>Garuda</b></th>
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
		</tr>
	</thead>
</table>


<form name="doc_test" action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post">
	<button type="submit" name="submit_doc" class="btn btn-info">Export</button>
</form>

	<?php
		if(isset($_POST['submit_doc'])) {
			header("Content-Type: application/vnd.msword");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("content-disposition: attachment;filename=hasilekspor.doc");
		}
	?>

</body>
</html>