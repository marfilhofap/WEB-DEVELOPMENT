<?php
include('session_cont.php');
include('function.php');
$id_estudante = $_SESSION['id_estudante'];

$dados = sel_table("t_estudante WHERE id_estudante ='$id_estudante'");
?>

<?php include('header.php'); ?>

<div class="container">

    <?php include('menu.php'); ?>

    <h3 class="bg-info text-white p-4 d-flex">
        <div>
            My Profile
        </div>
        <div class="ms-auto">
            <a href="relatorio/kartaun.php?id=<?= $id_estudante; ?>" target="_blank" class="btn btn-light">Kartaun</a>
        </div>
    </h3>

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