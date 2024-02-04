<?php
require_once('tcpdf/tcpdf_include.php');
include('../koneksaun.php');

$kon = koneksaun_1();
$t_estudante = pg_query($kon, 'SELECT * FROM t_estudante');
$dados = pg_fetch_all($t_estudante);
$loron = date('d-m-Y');

class PDF extends TCPDF
{
        private $headerControl = false;


        // Override the Header() method
        public function Header()
        {
                if (!$this->headerControl) {
                        $this->SetY(18);

                        $this->SetFont('helvetica', 'B', 18);
                        $this->Cell(0, 20, 'Lista Estudante CANOSSA', 0, false, 'C', 0, '', 0, false, 'M', 'M');

                        $imageFile = 'tcpdf/images/fdsl.jpg';
                        $this->Image($imageFile, 10, 5, 20);

                        $imageFile = 'tcpdf/images/fdsl.jpg';
                        $this->Image($imageFile, 180, 5, 20);

                        $this->headerControl = true;
                }
        }

        public function Footer()
        {
                $this->SetY(-15);
                $this->SetFont('helvetica', 'I', 8);
                $this->Cell(0, 10, 'Pajina ' . $this->getAliasNumPage() . ' husi ' . $this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        }
}

// Create a new PDF object (extended from TCPDF)
$pdf = new PDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('CANOSSA');
$pdf->SetAuthor('CANOSSA');
$pdf->SetTitle('Dados Estudante CANOSSA');
$pdf->SetSubject('Dados Estudante hotu nebe foti husi Sistema Informasaun Canossa nian');

$pdf->SetFont('helvetica', '', 12);

$pdf->AddPage();
$pdf->SetY($pdf->GetY() + 22);

$html = '<table border="1" style="border-collapse: collapse; width: 100%; padding: 10px;">
            <tr style="background-color:#4d94ff;color:#fff">
                <th style="padding: 4px;" width="40" align="center">No</th>
                <th style="padding: 4px;" width="250">Naran</th>
                <th style="padding: 4px;" width="60" align="center">Sexo</th>
                <th style="padding: 4px;" width="90" align="center">Emis</th>
                <th style="padding: 4px;" width="100" align="center">Data Moris</th>
            </tr>';

$no = 1;
foreach ($dados as $key => $value) {
        $html .= '<tr>
                <td style="padding: 4px;" width="40" align="center">' . $no++ . '</td>
                <td style="padding: 4px;" width="250">' . $value['naran_estudante'] . '</td>
                <td style="padding: 4px;" width="60" align="center">' . $value['sexo'] . '</td>
                <td style="padding: 4px;" width="90" align="center">' . $value['emis'] . '</td>
                <td style="padding: 4px;" width="100" align="center">' . $value['data_moris'] . '</td>
            </tr>';
}

$html .= '</table>';

$html .= '<br><br><br>';

$html .= '<table style="text-align: center;">
<tr>
        <td></td>
        <td>Dili, ' . $loron . '</td>
        <td></td>
</tr>
<tr>
        <td></td>
        <td></td>
        <td></td>
</tr>
<tr>
        <td></td>
        <td></td>
        <td></td>
</tr>
<tr>
        <td></td>
        <td>Marfilho Fidel Alvares Pereira</td>
        <td></td>
</tr>
<tr>
        <td></td>
        <td><b>(Diretor da Escola CANOSSA)</b></td>
        <td></td>
</tr>

</table>';

$pdf->writeHTML($html, true, false, true, false, '');


// $qrcode = 'Koko';
// $pdf->write2DBarcode($qrcode, 'QRCODE,H', 17, 53, 20, 20, $style, 'N');


$pdf->Output('Relatorio_Estudante_' . $loron, 'I');

// Exit the script
exit;