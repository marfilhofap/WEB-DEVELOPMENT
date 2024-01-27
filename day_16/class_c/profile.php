<?php
include('session_cont.php');
include('function.php');
$id_estudante = $_SESSION['id_estudante'];

$dados = sel_table("t_estudante WHERE id_estudante ='$id_estudante'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <?php include('menu.php'); ?>

        <h3 class="bg-success text-white p-4">My Profile</h3>

        <?php foreach ($dados as $a) : ?>

            <div class="row">
                <div class="col-md-4">Naran Kompletu</div>
                <div class="col-md-8">: <?= $a['naran_estudante']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-4">Sexo</div>
                <div class="col-md-8">: <?= $a['sexo']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-4">Emis</div>
                <div class="col-md-8">: <?= $a['emis']; ?></div>
            </div>
            <div class="row">
                <div class="col-md-4">Data Moris</div>
                <div class="col-md-8">: <?= $a['data_moris']; ?></div>
            </div>

        <?php endforeach ?>

    </div>

</body>

</html>