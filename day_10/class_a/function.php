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

function insert_estudante($naran_estudante, $sexo, $data_moris){
    global $kon;

    $sql = "INSERT INTO t_estudante(naran_estudante, sexo, data_moris) VALUES('$naran_estudante', '$sexo', '$data_moris')";
    // Prepare no Execute
    $dados = $kon->prepare($sql);
    $dados->execute();

}
?>