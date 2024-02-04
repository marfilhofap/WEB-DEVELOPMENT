<?php
include('session_conf.php');
include('function.php');

$id_estudante = $_SESSION['id_estudante'];

$no = 1;
$dados = sel_table("t_estudante where id_estudante = '$id_estudante' order by naran_estudante ASC");
?>

<?php include('header.php'); ?>

<div class="container">

    <?php include('menu.php') ?>

    <div class="alert alert-info d-flex m-2">
        <div>
            <h3>Profile</h3>
        </div>
        <div class="ms-auto">
            <a class="btn btn-success" href="relatorio/kartaun_estudante.php?id=<?= $id_estudante; ?>" target="_blank">Kartaun Estudante</a>
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

<?php include('footer.php'); ?>