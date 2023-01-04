<?php ob_start(); ?>

<?php
session_start();


require '../../fungsi/fungsi.php';

?>
<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;
			width: 630px;
		}
		table td {
			word-wrap:break-word;
			width: 8%;
			height: 6%;
			text-align: center;
		}

		table th {
			width: 8%;
			height: 6%;
			text-align: center;
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


<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th rowspan="2"><b>#</b></th>
            <th rowspan="2" class="width"><b>No. Gudep</b></th>
            <th rowspan="2" class="width"><b>Sanggar Bakti</b></th>
            <th colspan="2"><b>Calon Penegak</b></th>
            <th colspan="2"><b>Penegak Bantara</b></th>
            <th colspan="2"><b>Penegak Laksana</b></th>
            <th colspan="2"><b>Penegak Garuda</b></th>
            <th colspan="2"><b>Calon Pandega</b></th>
            <th colspan="2"><b>Pandega</b></th>
            <th colspan="2"><b>Pandega Garuda</b></th>
            <th colspan="2"><b>Jumlah</b></th>
        </tr>
        <tr>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
            <th><b>PA</b></th>
            <th><b>PI</b></th>
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
        </tr>

<?php endforeach; ?>        

    </tbody>
</table>    

</body>
</html>

<?php
$html = ob_get_contents();
ob_end_clean();

require 'html2pdf/autoload.php';

$pdf = new Spipu\Html2Pdf\Html2Pdf('L','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Potensi.pdf', 'I');
?>
