<?php

include('koneksaun.php');
$kon = koneksaun();

function select_tabela($naran_tabela)
{
    global $kon;

    // Query
    $query = "SELECT * FROM $naran_tabela";
    // Prepare no Execute
    $sql = $kon->prepare($query);
    $sql->execute();

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function insert_estudante($naran_estudante, $sexo, $data_moris)
{
    global $kon;

    $query = "INSERT INTO t_estudante(naran_estudante, sexo, data_moris) 
    VALUES ('$naran_estudante', '$sexo', '$data_moris')";
    $sql = $kon->prepare($query);
    $sql->execute();
}

function insert_materia($materia)
{
    global $kon;

    $query = "INSERT INTO t_materia(materia) 
    VALUES ('$materia')";
    $sql = $kon->prepare($query);
    $sql->execute();
}
