<?php
require_once('tcpdf/tcpdf_include.php');
include('../koneksaun.php');

$kon = koneksaun_1();

$id = $_GET['id'];
$t_estudante = pg_query($kon, "SELECT * FROM t_estudante WHERE id_estudante='$id'");
$dados = pg_fetch_all($t_estudante);
$loron = date('d-m-Y');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('CANOSSA');
$pdf->SetAuthor('CANOSSA');
$pdf->SetTitle('Dados Estudante CANOSSA');
$pdf->SetSubject('Dados Estudante hotu nebe foti husi Sistema Informasaun Canossa nian');

// set style for barcode
$style = array(
  'border' => 0,
  'vpadding' => 'auto',
  'hpadding' => 'auto',
  'fgcolor' => array(0, 0, 0),
  'bgcolor' => array(255, 255, 255),
  'module_width' => 1,
  'module_height' => 1
);

$pdf->AddPage('P', array(54, 86));
$pdf->SetMargins(1, 3, 1);

$pdf->SetFont('times', '', 7);

$html = '<table style="float: center; height: 1px;" width="100px">
          <tbody>
            <tr>
              <td style="width: 31px;"><img style="margin: 0px;" src="pdf/images/fdsl.jpg" alt="test alt attribute" width="46" height="46" border="0" /></td>
              <td style="text-align:center">Kartaun Estudante<br></td>
              <td style="width: 31px;"><img style="margin: 0px;" src="pdf/images/fdsl.jpg" alt="test alt attribute" width="46" height="46" border="0" /></td>
            </tr>
            <tr>
              <td colspan="3">
                <hr>
              </td>
            </tr>
            <tr>
              <td colspan="3" style="text-align:center">Kartaun Membru FDSL</td>
            </tr>
          </tbody>
        </table>';

$pdf->writeHTML($html, true, false, false, false, '');


foreach ($dados as $key => $values) {


  // set font
  $pdf->SetFont('times', '', 7);

  $html = '<table border="0" cellpadding="1" cellspacing="0">
            <tbody>
            <tr>
                <td width="50" align="left"> Emis </td>
                <td width="15"> : </td>
                <td width="115"> ' . $values['emis'] . ' </td>
            </tr>
              <tr>
                <td width="50" align="left"> Naran </td>
                <td width="15"> : </td>
                <td width="115"> ' . $values['naran_estudante'] . ' </td>
              </tr>
              <tr>
                <td width="50" align="left"> Sexu </td>
                <td width="15"> : </td>
                <td width="115"> ' . $values['sexu'] . ' </td>
              </tr>
              <tr>
                <td width="50" align="left"> Data Moris </td>
                <td width="15"> : </td>
                <td width="115"> ' . $values['data_moris'] . ' </td>
              </tr>
            </tbody>
          </table>';

  $pdf->writeHTML($html, true, false, false, false, '');
}


$qrcode = "192.168.250.36/web_development/day_16/class_a/relatorio/kartaun_estudante.php?id=$id";
$pdf->write2DBarcode($qrcode, 'QRCODE,H', 17, 46, 20, 20, $style, 'N');


$pdf->Output('Kartaun Estudante_' . $loron, 'I');

// Exit the script
exit;
