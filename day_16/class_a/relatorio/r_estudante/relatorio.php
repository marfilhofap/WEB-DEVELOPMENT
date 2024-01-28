<?php

require_once('tcpdf_include.php');


$a = $con = pg_connect("host=localhost port=5432 dbname=db_web_development user=postgres password=admin")
  or die("Falha em connecção\n");

$export = pg_query($a, "SELECT * FROM t_estudante");


$row = pg_fetch_all($export);

$no = 1;
$kuantidade_total = 0;
$folin_total = 0;


foreach ($row as $key => $dados) {
  $naran_produtu = $dados['naran_produtu'];
  $folin = $dados['folin'];
  $kuantidade = $dados['kuantidade'];
  $kuantidade_total += $kuantidade;
  $total = $dados['total'];
  $folin_total += $total;

  $txt .= '<tr>
      <td width="17" align="center">' . $no++ . '</td>
      <td width="53">' . $naran_produtu . '</td>
      <td width="35">$ ' . $folin . '</td>
      <td width="45" align="center">' . $kuantidade . '</td>
      <td width="40">$ ' . $total . '</td>
     </tr>';
}

$txt .= '<tr>
      <td width="105" align="center"><b>Total:</b></td>
      <td width="45" align="center"><b>' . $kuantidade_total . '</b></td>
      <td width="40"><b>$ ' . $folin_total . '</b></td>
     </tr>';

$txt .= '<tr>
     <td width="150" align="center"><b>Osan kliente:</b></td>
     <td width="40"><b>$ ' . $osan_fo . '</b></td>
    </tr>';

$osan_volta = $osan_fo - $folin_total;
