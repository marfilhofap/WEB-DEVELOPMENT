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

function edit_estudante($id_estudante, $naran_estudante, $sexo, $data_moris)
{
    global $kon;

    $query = "UPDATE t_estudante SET naran_estudante='$naran_estudante', 
    sexo='$sexo', data_moris ='$data_moris'
    WHERE id_estudante = '$id_estudante'";
    $sql = $kon->prepare($query);
    $sql->execute();
}

function edit_materia($id_materia, $materia)
{
    global $kon;

    $query = "UPDATE t_materia SET materia = '$materia' WHERE id_materia = '$id_materia'";
    $sql = $kon->prepare($query);
    $sql->execute();
}

function delete($naran_table, $p_key, $value)
{
    global $kon;

    $query = "DELETE FROM $naran_table WHERE $p_key = '$value'";
    $sql = $kon->prepare($query);
    $sql->execute();
}
