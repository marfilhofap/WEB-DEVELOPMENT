<?php
include('koneksaun.php');
$kon = koneksaun();
// Query
$query = "SELECT * FROM t_estudante order by naran_estudante ASC";

// Prepara no Exekuta Query
$dados = $kon->prepare($query);
$dados->execute();

// Fetch nia Rejultadu sai associative array
$resultado = $dados->fetchAll(PDO::FETCH_ASSOC);

// var_dump($resultado);
$no = 1;
foreach($resultado as $a){
echo $no++.'. '.$a['naran_estudante'].'<br>';
}
?>