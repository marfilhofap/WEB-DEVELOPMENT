<?php

include('koneksaun.php');
$kon = koneksaun();

function select_tabela($naran_tabela){
    global $kon;

    // Query
    $query = "SELECT * FROM $naran_tabela";
    // Prepare no Execute
    $sql = $kon->prepare($query);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;

}


?>