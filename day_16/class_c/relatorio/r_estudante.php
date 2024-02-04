<?php
require_once('pdf/tcpdf_include.php');
include('../koneksaun.php');

$kon = koneksaun_1();
$t_estudante = pg_query($kon, 'SELECT * FROM t_estudante order by naran_estudante');
$dados = pg_fetch_all($t_estudante);

class PDF extends TCPDF
{

        private $header_cont;

        public function Header()
        {
                if (!$this->header_cont) {
                        $this->setY(15);
                        $this->SetFont('helvetica', 'B', 18);
                        $this->Cell(0, 20, 'Lista Estudante SENOFA', 0, false, 'C', 0, '', 0, false, 'M', 'M');

                        $img = 'pdf/images/fdsl.jpg';
                        $this->Image($img, 10, 5, 20);

                        $img = 'pdf/images/logo_ls.jpg';
                        $this->Image($img, 170, 10, 30);

                        $this->header_cont = true;
                }
        }
        public function Footer()
        {
                $this->SetY(-15);
                $this->SetFont('helvetica', 'I', 8);
                $this->Cell(0, 10, 'Pajina ' . $this->getAliasNumPage() . ' husi ' .
                        $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        }
}

// Create a new TCPDF object
$pdf = new PDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('SENOFA');
$pdf->SetAuthor('SENOFA');
$pdf->SetTitle('Lista Estudante');
$pdf->SetSubject('Lista estudante SENOFA nian');

// Set default font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();

$pdf->SetY($pdf->GetY() + 22);

$html = '<table border="1" style="padding: 6px">
        <tr style="background-color:#4d94ff; color:#fff">
                <td width="40" align="center">No</td>
                <td width="250">Naran</td>
                <td width="70" align="center">Sexo</td>
                <td width="90" align="center">Emis</td>
                <td width="90" align="center">Data Moris</td>
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

$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to the browser or save it to a file
$pdf->Output('example.pdf', 'I'); // Use 'D' to force download, 'F' to save to a file, 'I' to display in the browser

// Exit the script
exit;
