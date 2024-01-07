<?php
include('function.php');
$dados = select_tabela('t_estudante');

if (isset($_POST['gravar'])) {
    if (!empty($_POST['naran_estudante']) && !empty($_POST['sexo']) && !empty($_POST['data_moris'])) {
        $naran_estudante = $_POST['naran_estudante'];
        $sexo = $_POST['sexo'];
        $data_moris = $_POST['data_moris'];

        $rejultadu = insert_estudante($naran_estudante, $sexo, $data_moris);
    }
}

if (isset($_POST['edit'])) {
    $id_estudante = $_POST['id_estudante'];
    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $resultado = edit_estudante($id_estudante, $naran_estudante, $sexo, $data_moris);
    header('Location: index.php');
}

if (isset($_GET['delete_estudante'])) {
    $naran_table = 't_estudante';
    $p_key = 'id_estudante';
    $value = $_GET['delete_estudante'];

    $resultado = delete($naran_table, $p_key, $value);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>

    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h1>BEMVINDO</h1>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="materia.php">Materia</a>
            </li>
        </ul>

        <?php if (!isset($_GET['insert']) && !isset($_GET['edit'])) { ?>

            <div class="alert alert-info d-flex mt-2">
                <div>
                    <h3>Dados Estudante</h3>
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
                    <?php
                    $no = 1;
                    foreach ($dados as $a) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['naran_estudante'] ?></td>
                            <td><?= $a['sexo'] ?></td>
                            <td><?= $a['data_moris'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="index.php?edit=<?= $a['id_estudante'] ?>">Edit</a>
                                <a class="btn btn-danger" href="index.php?delete_estudante=<?= $a['id_estudante'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php
        }
        if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
        ?>


            <div class="alert alert-info d-flex mt-2">
                <h3>Insert dados Estudante</h3>
            </div>

            <form action="index.php" method="post">
                <ul>
                    <li>
                        <label for="naran_estudante">Naran Estudante:</label>
                        <input type="text" name="naran_estudante" id="naran_estudante">
                    </li>
                    <li>
                        <label for="sexo">Sexo:</label>
                        <select name="sexo" id="sexo">
                            <option value="" selected hidden>- Hili Sexo -</option>
                            <option value="M">Mane</option>
                            <option value="F">Feto</option>
                        </select>
                    </li>
                    <li>
                        <label for="data_moris">Data Moris:</label>
                        <input type="date" name="data_moris" id="data_moris">
                    </li>
                    <li>
                        <button type="submit" name="gravar">Save</button>
                        <button><a href="index.php">Kansela</a></button>
                    </li>
                </ul>
            </form>

            <?php
        }

        if (isset($_GET['edit'])) {

            $id_estudante = $_GET['edit'];

            $dados_estudante = select_tabela("t_estudante WHERE id_estudante = '$id_estudante'");

            foreach ($dados_estudante as $a) {
            ?>

                <div class="alert alert-info d-flex mt-2">
                    <h3>Edit dados Estudante</h3>
                </div>

                <form action="index.php" method="post">
                    <input type="text" name="id_estudante" value="<?= $a['id_estudante']; ?>" hidden>
                    <ul>
                        <li>
                            <label for="naran_estudante">Naran Estudante:</label>
                            <input type="text" name="naran_estudante" id="naran_estudante" value="<?= $a['naran_estudante']; ?>">
                        </li>
                        <li>
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" id="sexo">

                                <?php if ($a['sexo'] == 'M') {
                                    echo '<option value="M" selected>Mane</option>
                                <option value="F">Feto</option>';
                                } else if ($a['sexo'] == 'F') {
                                    echo '<option value="M">Mane</option>
                                <option value="F" selected>Feto</option>';
                                } ?>

                            </select>
                        </li>
                        <li>
                            <label for="data_moris">Data Moris:</label>
                            <input type="date" name="data_moris" id="data_moris" value="<?= $a['data_moris']; ?>">
                        </li>
                        <li>
                            <button type="submit" name="edit">Save</button>
                            <button><a href="index.php">Kansela</a></button>
                        </li>
                    </ul>
                </form>

        <?php }
        } ?>

    </div>

</body>

</html>