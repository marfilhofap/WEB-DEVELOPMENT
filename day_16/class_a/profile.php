<?php
session_start();

if (!isset($_SESSION['emis'])) {
    header('Location: login.php');
    exit;
}

include('function.php');

$id_estudante = $_SESSION['id_estudante'];

$no = 1;
$dados = sel_table("t_estudante where id_estudante = '$id_estudante' order by naran_estudante ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>

    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <?php include('menu.php') ?>

        <div class="alert alert-info d-flex m-2">
            <div>
                <h3>Profile</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                Naran Kompletu
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-9">
                <?= $dados[0]['naran_estudante']; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                Sexo
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-9">
                <?= $dados[0]['sexo']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                Data Moris
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-9">
                <?= $dados[0]['data_moris']; ?>
            </div>
        </div>

    </div>
</body>

</html>