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

function insert_utilijador($id_estudante, $password, $user_level)
{
    global $kon;
    $query = "INSERT INTO t_utilijador(id_estudante, password, user_level) 
    VALUES ('$id_estudante', '$password', '$user_level')";
    $sql = $kon->prepare($query);
    $sql->execute();
}

function edit_utilijador($id, $id_estudante, $password, $user_level)
{
    global $kon;
    $query = "UPDATE t_utilijador SET id_estudante='$id_estudante', 
    password='$password', user_level ='$user_level'
    WHERE id_utilijador = '$id'";
    $sql = $kon->prepare($query);
    $sql->execute();
}
