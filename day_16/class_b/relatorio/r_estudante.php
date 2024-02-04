<?php
require_once('pdf/tcpdf_include.php');
include('../koneksaun.php');

$kon = koneksaun_1();
$t_estudante = pg_query($kon, 'SELECT * FROM t_estudante order by naran_estudante');
$dados = pg_fetch_all($t_estudante);

class PDF extends TCPDF
{

        private $header_cont = false;

        public function Header()
        {
                if (!$this->header_cont) {
                        $this->setY(20);
                        $this->setTextColor(128, 0, 0);
                        $this->SetFont('times', 'I', 20);
                        $this->Cell(0, 20, 'Lista Estudante CANOSSA', 0, false, 'C', 0, '', 0, false, 'M', 'M');

                        $img = 'pdf/images/fdsl.jpg';
                        $this->Image($img, 10, 6, 25);
                        // x, y, w

                        $img = 'pdf/images/fdsl.jpg';
                        $this->Image($img, 175, 6, 25);

                        $this->header_cont = true;
                }
        }

        public function Footer()
        {
                $this->SetY(-15);
                $this->SetFont('times', 'I', 8);
                $this->Cell(0, 10, 'Pajina ' . $this->getAliasNumPage() . ' husi ' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        }
}


// Create a new TCPDF object
$pdf = new PDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('CANOSSA');
$pdf->SetAuthor('CANOSSA');
$pdf->SetTitle('Sistema Informasaun CANOSSA');
$pdf->SetSubject('Lista dadus Estudante');

// Set default font
$pdf->SetFont('times', '', 12);

// Add a page
$pdf->AddPage();

$pdf->setY($pdf->getY() + 24);
$html = '<hr>';
$pdf->writeHTML($html, true, false, true, false, '');

// $pdf->setY($pdf->getY() + 5);

// Set some content
$html = '<table border="1" style="padding: 6px">
        <tr style="background-color:#4d94ff; color:#fff">
                <th width="50" align="center">No</th>
                <th width="250">Naran</th>
                <th width="70" align="center">Sexo</th>
                <th width="80" align="center">Emis</th>
                <th width="auto" align="center">Data Moris</th>
        </tr>';
$no = 1;
foreach ($dados as $key => $value) {
        $html .= '<tr>
                <td align="center">' . $no++ . '</td>
                <td>' . $value['naran_estudante'] . '</td>
                <td align="center">' . $value['sexo'] . '</td>
                <td align="center">' . $value['emis'] . '</td>
                <td align="center">' . $value['data_moris'] . '</td>
        </tr>';
}

$html .= '</table>';

for ($i = 0; $i < 60; $i++) {
        $html .= 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolorum consequatur quam dolor in doloremque, ducimus minima omnis sapiente. Facilis ipsum dolore corporis distinctio dolorum porro tenetur consequatur necessitatibus atque.';
}


$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to the browser or save it to a file
$pdf->Output('example.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
