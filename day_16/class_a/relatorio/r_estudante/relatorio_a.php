<?php
require_once('tcpdf_include.php');

// Create a new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('A4 PDF Example');
$pdf->SetSubject('A simple TCPDF template for A4');

// Set default font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();

// // Set some content
$html = '<h1>Relatorio Estudante</h1>';

$html .= '<table border="1">
        <tr>
                <th>Naran</th>
                <th>Sexo</th>
                <th>Hela Fatin</th>
        </tr>
        <tr>
                <td>Fidel</td>
                <td>Mane</td>
                <td>Bidau Santana</td>
        </tr>
</table>';

$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to the browser or save it to a file
$pdf->Output('example.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
