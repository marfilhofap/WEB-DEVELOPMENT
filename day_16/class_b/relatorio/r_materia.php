<?php
require_once('pdf/tcpdf_include.php');
include('../koneksaun.php');

$kon = koneksaun_1();
$t_materia = pg_query($kon, 'SELECT * FROM t_materia order by materia');
$dados = pg_fetch_all($t_materia);

// Create a new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('CANOSSA');
$pdf->SetAuthor('CANOSSA');
$pdf->SetTitle('Sistema Informasaun CANOSSA');
$pdf->SetSubject('Lista dadus Estudante');

// Set default font
$pdf->SetFont('times', '', 12);

// Add a page
$pdf->AddPage();

// Set some content
$html = '<h1 style="text-align: center">Lista dadus Estudante</h1>';

$html .= '<table border="1" style="padding: 6px">
        <tr style="background-color:#4d94ff; color:#fff">
                <th width="50" align="center">No</th>
                <th width="auto">Materia</th>
        </tr>';
$no = 1;
foreach ($dados as $key => $value) {
        $html .= '<tr>
                <td align="center">' . $no++ . '</td>
                <td>' . $value['materia'] . '</td>
        </tr>';
}

$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to the browser or save it to a file
$pdf->Output('example.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
