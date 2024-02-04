<?php
include('session_conf.php');
include('function.php');

$id_estudante = $_SESSION['id_estudante'];
$dados = select_tabela("t_estudante WHERE id_estudante='$id_estudante'");
?>

<?php include('header.php'); ?>

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

<?php include('footer.php'); ?>