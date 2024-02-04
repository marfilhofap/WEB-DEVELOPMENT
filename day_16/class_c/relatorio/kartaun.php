<?php
require_once('pdf/tcpdf_include.php');
include('../koneksaun.php');

$id = $_GET['id'];

$kon = koneksaun_1();
$t_estudante = pg_query($kon, "SELECT * FROM t_estudante WHERE id_estudante = '$id'");
$dados = pg_fetch_all($t_estudante);

class PDF extends TCPDF
{

        private $header_cont;

        public function Header()
        {
                $this->setY(5);
                $this->SetFont('times', 'B', 7);
                $this->Cell(0, 20, 'Kartaun Estudante SENOFA', 0, false, 'C', 0, '', 0, false, 'M', 'M');

                $img = 'pdf/images/fdsl.jpg';
                $this->Image($img, 1, 1, 8);

                $img = 'pdf/images/fdsl.jpg';
                $this->Image($img, 45, 1, 8);
        }
}

// Create a new TCPDF object
$pdf = new PDF('P', 'mm', array(54, 86), true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('SENOFA');
$pdf->SetAuthor('SENOFA');
$pdf->SetTitle('Kartaun Estudante');
$pdf->SetSubject('Kartaun Estudante SENOFA nian');

// Set default font
$pdf->SetFont('times', '', 7);

// Add a page
$pdf->AddPage();

$pdf->SetY($pdf->GetY() + 1);
$pdf->setMargins(1, 1, 1);
$hr = '<hr>';
$pdf->writeHTML($hr, true, false, true, false, '');

$pdf->setTextColor(0, 0, 0);

foreach ($dados as $k => $v) {
        $html = '
<table>
        <tr><td colspan="2" align="center"><img src="pdf/images/fi.jpg" width="40px"></td></tr>
        <tr><td width="40">EMIS</td><td width="auto">: ' . $v['emis'] . '</td></tr>
        <tr><td width="40">Naran</td><td width="auto">: ' . $v['naran_estudante'] . '</td></tr>
        <tr><td width="40">Sexo</td><td width="auto">: ' . $v['sexo'] . '</td></tr>
        <tr><td width="40">Data Moris</td><td width="auto">: ' . $v['data_moris'] . '</td></tr>
</table>
';
}

$pdf->writeHTML($html, true, false, true, false, '');

// ------------------------------------------------------------------------------------------------

$pdf->SetFont('times', '', 6);
$pdf->setTextColor(234, 50, 0);
$html = '<i align="center">Verifika Kartaun iha ne:</i>';
$pdf->writeHTML($html, true, false, true, false, '');

// -------------------------------------------------------------------------------------------------
$style = array(
        'border' => 0,
        'vpadding' => 'auto',
        'hpadding' => 'auto',
        'fgcolor' => array(0, 0, 0),
        'bgcolor' => array(255, 255, 255),
        'module_width' => 1,
        'module_height' => 1
);

$url = "192.168.250.36/web_development/day_16/class_c/relatorio/kartaun.php?id=$id";
$pdf->write2DBarcode($url, 'QRCODE,H', 20, 50, 15, 15, $style, 'N');


// -------------------------------------------------------------------------------------------------



$loron = date('d-m-Y');

$pdf->Output('kartaun_estudante_' . $loron, 'I');
exit;
