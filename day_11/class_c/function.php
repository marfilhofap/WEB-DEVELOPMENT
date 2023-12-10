<?php
include('koneksaun.php');
$kon = koneksaun();

function sel_table($naran_table)
{
    global $kon;
    $sql = "SELECT * FROM $naran_table";
    $dados = $kon->prepare($sql);
    $dados->execute();
    return $dados->fetchAll(PDO::FETCH_ASSOC);
}

function insert_estudante($naran_estudante, $sexo, $data_moris)
{
    global $kon;
    $sql = "INSERT INTO t_estudante(naran_estudante, sexo, data_moris) 
            VALUES('$naran_estudante', '$sexo', '$data_moris')";
    $dados = $kon->prepare($sql);
    $dados->execute();
}

function edit_estudante($id, $naran_estudante, $sexo, $data_moris)
{
    global $kon;
    $sql = "UPDATE t_estudante SET naran_estudante='$naran_estudante',
    sexo='$sexo', data_moris = '$data_moris'
    WHERE id_estudante = '$id'";
    $dados = $kon->prepare($sql);
    $dados->execute();
}

function insert_materia($materia)
{
    global $kon;
    $sql = "INSERT INTO t_materia(materia) VALUES('$materia')";
    $dados = $kon->prepare($sql);
    $dados->execute();
}

function edit_materia($id, $materia)
{
    global $kon;
    $sql = "UPDATE t_materia SET materia='$materia' WHERE id_materia='$id'";
    $dados = $kon->prepare($sql);
    $dados->execute();
}
