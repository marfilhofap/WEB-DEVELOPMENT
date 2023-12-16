<?php

if (isset($_POST['insert_estudante'])) {

    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $rejultado = insert_estudante($naran_estudante, $sexo, $data_moris);
}

if (isset($_POST['edit_estudante'])) {
    $id = $_POST['id'];
    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $rejultado = edit_estudante($id, $naran_estudante, $sexo, $data_moris);
}

if (isset($_GET['delete_estudante'])) {
    $naran_table = 't_estudante';
    $p_key = 'id_estudante';
    $value = $_GET['delete_id'];

    $rejultadu = delete($naran_table, $p_key, $value);
    header('Location: index.php');
}
