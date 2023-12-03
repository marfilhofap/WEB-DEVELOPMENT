<?php
include('koneksaun.php');
$kon = koneksaun();

function select_table($naran_table){
    global $kon;

    $sql = "SELECT * FROM $naran_table";
    // Prepare no Execute
    $dados = $kon->prepare($sql);
    $dados->execute();
    // Fetch nia Array Associative
    $rejultado = $dados->fetchAll(PDO::FETCH_ASSOC);

    return $rejultado;

}
?>