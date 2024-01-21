<?php
session_start();
if (!isset($_SESSION['emis'])) {
    header('Location: login.php');
    exit();
}

include('function.php');
$no = 1;
$dados = sel_table('v_aula order by naran_estudante, materia');

if (isset($_POST['insert'])) {
    $id_estudante = $_POST['id_estudante'];
    $id_materia = $_POST['id_materia'];

    $resultado = insert_aula($id_estudante, $id_materia);
    header('Location: aula.php');
}

if (isset($_POST['edit_aula'])) {
    $id_aula = $_POST['id_aula'];
    $id_materia = $_POST['id_materia'];
    $id_estudante = $_POST['id_estudante'];

    $resultado = edit_aula($id_aula, $id_materia, $id_estudante);
    header('Location: aula.php');
}

if (isset($_GET['delete_aula'])) {
    $naran_table = 't_aula';
    $p_key = 'id_aula';
    $value = $_GET['delete_aula'];

    $resultado = delete($naran_table, $p_key, $value);
    header('Location: aula.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <div class="bg-primary p-4 text-light text-center">
            <h1>Sistema Informasaun Eskola SENOFA</h1>
            <p>Bemvindo <?= $_SESSION['naran_estudante'] ?></p>
        </div>
        <ul class="nav nav-pills m-2">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="materia.php">Materia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="aula.php">Aula</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="utilijador.php">Utilijador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-danger text-white" href="logout.php">logout</a>
            </li>
        </ul>

        <?php if (!isset($_GET['insert']) && !isset($_GET['edit'])) { ?>

            <div class="alert alert-info d-flex mt-2">
                <div>
                    <h3>Dados Aula</h3>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="aula.php?insert=true">Insert</a>
                </div>
            </div>


            <table class="table table-hover">
                <thead>
                    <td>No</td>
                    <td>Naran</td>
                    <td>Sexo</td>
                    <td>Materia</td>
                    <td>Asaun</td>
                </thead>
                <tbody>
                    <?php
                    foreach ($dados as $a) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['naran_estudante']; ?></td>
                            <td><?= $a['sexo']; ?></td>
                            <td><?= $a['materia']; ?></td>
                            <td>
                                <a class="btn btn-warning" href="aula.php?edit=<?= $a['id_aula']; ?>">Edit</a>
                                <a class="btn btn-danger" href="aula.php?delete_aula=<?= $a['id_aula']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        <?php }

        if (isset($_GET['insert']) && $_GET['insert'] == 'true') { ?>

            <div class="alert alert-primary d-flex mt-2">
                <h3>Insert dados Aula</h3>
            </div>

            <form action="aula.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="naran_estudante" class="form-label">Naran Estudante:</label>
                        <select name="id_estudante" id="naran_estudante" class="form-control">
                            <option value="" selected hidden>- Hili estudante -</option>
                            <?php
                            $estudante = sel_table('t_estudante order by naran_estudante');
                            foreach ($estudante as $a) {
                            ?>
                                <option value="<?= $a['id_estudante']; ?>"><?= $a['naran_estudante']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="id_materia" class="form-label">Materia:</label>
                        <select name="id_materia" id="id_materia" class="form-control">
                            <option value="" selected hidden>- Hili Materia -</option>
                            <?php
                            $materia = sel_table('t_materia order by materia');
                            foreach ($materia as $a) {
                            ?>
                                <option value="<?= $a['id_materia']; ?>"><?= $a['materia']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit" name="insert">save</button>
                        <a class="btn btn-secondary" href="aula.php">Kansela</a>
                    </div>
                </div>


            </form>

            <?php }
        if (isset($_GET['edit']) && !empty($_GET['edit'])) {

            $id_aula = $_GET['edit'];
            $dados_aula = sel_table("t_aula where id_aula='$id_aula'");
            foreach ($dados_aula as $b) {
            ?>

                <div class="alert alert-warning d-flex mt-2">
                    <h3>Edit dados Aula</h3>
                </div>

                <form action="aula.php" method="post">
                    <input type="text" name="id_aula" value="<?= $b['id_aula']; ?>" hidden>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="naran_estudante" class="form-label">Naran Estudante:</label>
                            <select name="id_estudante" id="naran_estudante" class="form-control">
                                <?php
                                $estudante = sel_table('t_estudante order by naran_estudante');
                                foreach ($estudante as $a) {

                                    if ($a['id_estudante'] == $b['id_estudante']) {
                                        echo "<option value=" . $a['id_estudante'] . " selected>" . $a['naran_estudante'] . "</option>";
                                    } else {
                                        echo "<option value=" . $a['id_estudante'] . ">" . $a['naran_estudante'] . "</option>";
                                    }
                                } ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="id_materia" class="form-label">Materia:</label>
                            <select name="id_materia" id="id_materia" class="form-control">
                                <?php
                                $materia = sel_table('t_materia order by materia');
                                foreach ($materia as $a) {
                                    if ($a['id_materia'] == $b['id_materia']) {
                                        echo "<option value=" . $a['id_materia'] . " selected>" . $a['materia'] . "</option>";
                                    } else {
                                        echo "<option value=" . $a['id_materia'] . ">" . $a['materia'] . "</option>";
                                    }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-3">
                            <button class="btn btn-primary" type="submit" name="edit_aula">save</button>
                            <a class="btn btn-secondary" href="aula.php">Kansela</a>
                        </div>
                    </div>

                </form>

        <?php }
        } ?>

    </div>

</body>

</html>