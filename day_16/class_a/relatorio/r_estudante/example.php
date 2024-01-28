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

// Set some content
$html = '<h1>Hello, TCPDF!</h1>
        <p>This is a simple example of creating an A4-sized PDF using TCPDF in PHP.</p>
        <p>You can add more content here...</p>';

$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to the browser or save it to a file
$pdf->Output('example.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
