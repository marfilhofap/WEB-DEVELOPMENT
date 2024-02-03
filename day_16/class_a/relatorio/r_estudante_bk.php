<?php
require_once('tcpdf/tcpdf_include.php');
include('../koneksaun.php');

$kon = koneksaun_1();
$t_estudante = pg_query($kon, 'SELECT * FROM t_estudante');
$dados = pg_fetch_all($t_estudante);

// Create a new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$pdf->setPrintHeader(false);

// Set document information
$pdf->SetCreator('CANOSSA');
$pdf->SetAuthor('CANOSSA');
$pdf->SetTitle('Dados Estudante CANOSSA');
$pdf->SetSubject('Dados Estudante hotu nebe foti husi Sistema Informasaun Canossa nian');

$pdf->SetFont('helvetica', '', 12);
$pdf->AddPage();
$html = '<h1 align="center">Lista Estudante Canossa</h1>';

$html .= '<table border="1">
                <tr style="background-color:#4d94ff;color:#000000">
                        <th width="40" align="center">No</th>
                        <th width="250">Naran</th>
                        <th width="60" align="center">Sexo</th>
                        <th width="90" align="center">Emis</th>
                        <th width="100" align="center">Data Moris</th>
                </tr>';

$no = 1;
foreach ($dados as $key => $value) {

        $html .= '<tr>
                <td width="40" align="center">' . $no++ . '</td>
                <td width="250">' . $value['naran_estudante'] . '</td>
                <td width="60" align="center">' . $value['sexo'] . '</td>
                <td width="90" align="center">' . $value['emis'] . '</td>
                <td width="100" align="center">' . $value['data_moris'] . '</td>
        </tr>';
}

$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('example.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
