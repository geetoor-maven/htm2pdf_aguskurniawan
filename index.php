<?php
	$content = "
	<html> 
	<body>
		<h1>HTML2PDF</h1> 
        Nama saya Agus Kurniawan <br>
        Kuliah di stmik profesional makassar <br>
        Jurusan Teknik Komputer
	</body>
	</html>
	";

	require __DIR__.'/html2pdf_v5.2/vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	$html2pdf = new Html2Pdf('P','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
	$html2pdf->writeHTML($content);
	$html2pdf->output();
?>