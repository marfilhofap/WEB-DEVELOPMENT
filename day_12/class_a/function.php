<?php
include('koneksaun.php');
$kon = koneksaun();

function select_table($naran_table)
{
    global $kon;
    $sql = "SELECT * FROM $naran_table";
    $dados = $kon->prepare($sql);
    $dados->execute();
    $rejultado = $dados->fetchAll(PDO::FETCH_ASSOC);

    return $rejultado;
}

function delete($naran_table, $p_key, $value)
{
    global $kon;
    $sql = "DELETE FROM $naran_table WHERE $p_key = '$value'";
    $dados = $kon->prepare($sql);
    $dados->execute();
}

function insert_estudante($naran_estudante, $sexo, $data_moris)
{
    global $kon;
    $sql = "INSERT INTO t_estudante(naran_estudante, sexo, data_moris) VALUES('$naran_estudante', '$sexo', '$data_moris')";
    $dados = $kon->prepare($sql);
    $dados->execute();
}

function edit_estudante($id, $naran_estudante, $sexo, $data_moris)
{
    global $kon;
    $sql = "UPDATE t_estudante 
    SET naran_estudante='$naran_estudante', 
    sexo='$sexo', 
    data_moris='$data_moris' 
    WHERE id_estudante='$id'";

    $dados = $kon->prepare($sql);
    $dados->execute();
}
