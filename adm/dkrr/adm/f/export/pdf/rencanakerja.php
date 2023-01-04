<?php ob_start(); ?>

<?php
session_start();

require '../../../f/fungsi/fungsi.php';

?>
<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			width: 400%;
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
<h1 style="text-align: center;">Daftar Rencana Kerja</h1>

<br>
<br>


<div style="text-align: center;">
	<table border="1" cellpadding="8">
		<thead>
	    	<tr>
	        	<th scope="col"><b>No</b></th>
			    <th scope="col"><b>Kegiatan</b></th>
			    <th scope="col"><b>Tahun</b></th>
	    	</tr>
	    </thead>
	    
	    <tbody>

	<?php 

	$i = 1;
	foreach (select__rencanakerja() as $key):

	?>      

	        <tr>
	            <th scope="row"><?= $i++; ?></th>
			    <td><?= $key['kegiatan'] ?></td>
			    <td><?= $key['tahun'] ?></td>
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

$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Program Kerja.pdf', 'I');
?>
