<?php 
include('koneksaun.php');
$kon = koneksaun();

function sel_table($naran_table){
    global $kon;
    $sql = "SELECT * FROM $naran_table";
    $dados = $kon->prepare($sql);
    $dados->execute();
    return $dados->fetchAll(PDO::FETCH_ASSOC);
}
?>