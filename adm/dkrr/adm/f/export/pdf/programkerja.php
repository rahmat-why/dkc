<?php ob_start(); ?>

<?php

session_start();

require '../../../f/fungsi/fungsi.php';

$thn = mysqli_fetch_assoc(select__thn());

?>
<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;
			width: 81%;
		}
		table td {
			word-wrap:break-word;
			width: 8%;
			height: 6%;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		table th {
			width: 8%;
			height: 6%;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.width {
			width: 18%;
			margin-top: 5px;
			text-align: center;	
		}
	</style>
</head>
<body>
<h1 style="text-align: center;">Data Potensi</h1>

<br>
<br>


<div style="text-align: center;">
	<table border="1" cellpadding="8">
		<thead>
	    	<tr>
	        	<th rowspan="2" scope="col"><b>#</b></th>
	        	<th rowspan="2" scope="col" class="width"><b>Kegiatan</b></th>
	        	<th colspan="12" scope="col"><b style="text-align: center;">Pelaksanaan Tahun <?= $thn['thn1'] ?>/<?= $thn['thn2'] ?></b></th>
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

	<?php 

	$i = 1;
	foreach (select__programkerja() as $key):

	?>      

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

</body>
</html>

<?php
$html = ob_get_contents();
ob_end_clean();

require 'html2pdf/autoload.php';

$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Program Kerja.pdf', 'I');
?>
