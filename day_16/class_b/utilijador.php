<?php
include('session_conf.php');
include('function.php');

$dados = select_tabela("v_utilijador");
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

        <?php include('menu.php') ?>

        <h3 class="bg-success p-4 text-white">My Profile</h3>

        <?php foreach ($dados as $a) { ?>

            <div class="row">
                <div class="col-md-3">Naran Kompletu</div>
                <div class="col-md-9">: <?= $a['naran_estudante']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-3">Sexo</div>
                <div class="col-md-9">: <?= $a['sexo']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-3">Emis</div>
                <div class="col-md-9">: <?= $a['emis']; ?></div>
            </div>

            <div class="row">
                <div class="col-md-3">Data Moris</div>
                <div class="col-md-9">: <?= $a['data_moris']; ?></div>
            </div>

        <?php } ?>

    </div>

</body>

</html>