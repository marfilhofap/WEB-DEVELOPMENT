<?php
require_once('tcpdf/tcpdf_include.php');
include('../koneksaun.php');

$kon = koneksaun_1();

$id = $_GET['id'];
$t_estudante = pg_query($kon, "SELECT * FROM t_estudante WHERE id_estudante='$id'");
$dados = pg_fetch_all($t_estudante);
$loron = date('d-m-Y');

$style = array(
        'border' => 0,
        'vpadding' => 'auto',
        'hpadding' => 'auto',
        'fgcolor' => array(0, 0, 0),
        'bgcolor' => array(255, 255, 255),
        'module_width' => 1,
        'module_height' => 1
);

class PDF extends TCPDF
{

        // Override the Header() method
        public function Header()
        {
                $this->SetY(7);

                $this->SetFont('helvetica', '', 9);
                $this->Cell(0, 20, 'Kartaun Estudante', 0, false, 'C', 0, '', 0, false, 'M', 'M');

                $imageFile = 'tcpdf/images/fdsl.jpg';
                $this->Image($imageFile, 2, 2, 8);

                $imageFile = 'tcpdf/images/fdsl.jpg';
                $this->Image($imageFile, 43, 2, 8);
        }
}

// Create a new PDF object (extended from TCPDF)
$pdf = new PDF('P', 'mm', array(54, 86), true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('CANOSSA');
$pdf->SetAuthor('CANOSSA');
$pdf->SetTitle('Dados Estudante CANOSSA');
$pdf->SetSubject('Dados Estudante hotu nebe foti husi Sistema Informasaun Canossa nian');

$pdf->SetFont('helvetica', '', 7);
$pdf->SetMargins(2, 3, 1,);

$pdf->AddPage();
$pdf->setTextColor(124, 0, 0);
$pdf->SetY($pdf->GetY() + 8);
$hr = '<hr>';
$pdf->writeHTML($hr, true, false, true, false, '');

// $pdf->SetY($pdf->GetY() + 2);
foreach ($dados as $k => $v) {
        $html = '
        <table>
                <tr align="center"><td colspan="2"><img src="tcpdf/images/fi.jpg" width="40"></td></tr>
                <tr><td width="40">Naran</td><td width="auto">: ' . $v['naran_estudante'] . '</td></tr>
                <tr><td width="40">Sexo</td><td width="auto">: ' . $v['sexo'] . '</td></tr>
                <tr><td width="40">Emis</td><td width="auto">: ' . $v['emis'] . '</td></tr>
                <tr><td width="40">Data Moris</td><td width="auto">: ' . $v['data_moris'] . '</td></tr>
        </table>
        ';
}


$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetFont('times', '', 6);
$hr = '<i align="center">Verifika Kartaun iha ne: </i>';
$pdf->writeHTML($hr, true, false, true, false, '');

$qrcode = "192.168.250.36/web_development/day_16/class_a/relatorio/kartaun_estudante.php?id=$id";
$pdf->write2DBarcode($qrcode, 'QRCODE,H', 20, 50, 15, 15, $style, 'N');


$pdf->Output('Kartaun Estudante_' . $loron, 'I');

// Exit the script
exit;
