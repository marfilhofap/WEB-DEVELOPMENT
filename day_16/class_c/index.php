<?php
session_start();
if (!isset($_SESSION['emis'])) {
    header('Location: login.php');
    exit();
}

include('function.php');

if (isset($_POST['aumenta'])) {

    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $insert = insert_estudante($naran_estudante, $sexo, $data_moris);
}

if (isset($_POST['edit'])) {
    $id = $_POST['id_estudante'];
    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $edit = edit_estudante($id, $naran_estudante, $sexo, $data_moris);
}

if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $naran_table = 't_estudante';
    $p_key = 'id_estudante';
    $value = $_GET['delete'];

    $rejultado = delete($naran_table, $p_key, $value);
    header('Location: index.php');
}

$no = 1;
$dados = sel_table('t_estudante order by naran_estudante ASC ');
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

    <!-- 
    Margin : Linha nia liur
    Padding : Linha nia laran
 -->

    <div class="container">

        <div class="bg-primary p-4 text-light text-center">
            <h1>Sistema Informasaun Eskola SENOFA</h1>
            <p>Bemvindo <?= $_SESSION['naran_estudante'] ?></p>
        </div>

        <ul class="nav nav-pills m-2">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="materia.php">Materia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aula.php">Aula</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="utilijador.php">Utilijador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-danger text-white" href="logout.php">logout</a>
            </li>
        </ul>

        <?php if (!isset($_GET['insert']) && !isset($_GET['edit_dados'])) { ?>

            <div class="alert alert-info d-flex mt-2">
                <div>
                    <h3>Dados estudante</h3>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="index.php?insert=true">Insert</a>
                </div>
            </div>


            <table class="table table-hover">
                <thead>
                    <td>No</td>
                    <td>Naran Estudante</td>
                    <td>Sexo</td>
                    <td>Data Moris</td>
                    <td>Asaun</td>
                </thead>
                <tbody>
                    <?php foreach ($dados as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['naran_estudante'] ?></td>
                            <td><?= $a['sexo'] ?></td>
                            <td><?= $a['data_moris'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="index.php?edit_dados=<?= $a['id_estudante'] ?>">Edit</a>
                                <a class="btn btn-danger" href="index.php?delete=<?= $a['id_estudante']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        <?php
        }
        if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
        ?>
            <div class="alert alert-primary d-flex mt-2">
                <h3>Insert dadus Estudante</h3>
            </div>

            <form action="index.php" method="post">

                <div class="row">
                    <div class="col-md-6">
                        <label for="naran_estudante" class="form-label">Naran Estudante:</label>
                        <input class="form-control" type="text" name="naran_estudante" id="naran_estudante" required>
                    </div>
                    <div class="col-md-3">
                        <label for="naran_estudante" class="form-label">Sexo:</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="" selected hidden>- Hili Sexo -</option>
                            <option value="M">Mane</option>
                            <option value="F">Feto</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="data_moris" class="form-label">Data Moris:</label>
                        <input class="form-control" type="date" name="data_moris" id="data_moris" required>
                    </div>
                </div>

                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit" name="aumenta">Gravar</button>
                        <a class="btn btn-secondary" href="index.php">Kansela</a>
                    </div>
                </div>

            </form>
            <?php
        }

        if (isset($_GET['edit_dados'])) {
            $id = $_GET['edit_dados'];

            $dados = sel_table("t_estudante WHERE id_estudante='$id'");

            foreach ($dados as $a) :
            ?>

                <div class="alert alert-warning d-flex mt-2">
                    <h3>Edit Dados Estudante</h3>
                </div>

                <form action="index.php" method="post">
                    <!-- Hidden -->
                    <input type="text" name="id_estudante" value="<?= $a['id_estudante'] ?>" hidden>
                    <!-- /Hidden -->

                    <div class="row">
                        <div class="col-md-6">
                            <label for="naran_estudante" class="form-label">Naran Estudante:</label>
                            <input class="form-control" type="text" name="naran_estudante" id="naran_estudante" value="<?= $a['naran_estudante'] ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="naran_estudante" class="form-label">Sexo:</label>
                            <select name="sexo" id="sexo" class="form-control">
                                <?php
                                if ($a['sexo'] == 'M') {
                                    echo '<option value="M" selected>Mane</option>
                                <option value="F">Feto</option>';
                                } else if ($a['sexo'] == 'F') {
                                    echo  '<option value="M">Mane</option>
                                <option value="F" selected>Feto</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="data_moris" class="form-label">Data Moris:</label>
                            <input class="form-control" type="date" name="data_moris" id="data_moris" required value="<?= $a['data_moris'] ?>">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-3">
                            <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                            <a class="btn btn-secondary" href="index.php">Kansela</a>
                        </div>
                    </div>

                </form>

        <?php
            endforeach;
        }
        ?>

    </div>

</body>

</html>