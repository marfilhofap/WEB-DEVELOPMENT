<?php
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
    <title>CRUD</title>

    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">


        <?php if (!isset($_GET['insert']) && !isset($_GET['edit_dados'])) { ?>
            <h1>Dadus Estudante</h1>
            <p><a href="materia.php">Dadus Materia</a></p>
            <p><a href="index.php?insert=true">Insert</a></p>

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
                                <a class="btn btn-danger" href="index.php?edit_dados=<?= $a['id_estudante'] ?>">Edit</a>
                                <a class="btn btn-warning" href="index.php?delete=<?= $a['id_estudante']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        <?php
        }
        if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
        ?>
            <h1>Insert dadus Estudante</h1>

            <form action="index.php" method="post">
                <ul>
                    <li>
                        <label for="naran_estudante">Naran Estudante:</label>
                        <input type="text" name="naran_estudante" id="naran_estudante" required>
                    </li>
                    <li>
                        <label for="naran_estudante">Sexo:</label>
                        <select name="sexo" id="sexo">
                            <option value="" selected hidden>- Hili Sexo -</option>
                            <option value="M">Mane</option>
                            <option value="F">Feto</option>
                        </select>
                    </li>
                    <li>
                        <label for="data_moris">Data Moris:</label>
                        <input type="date" name="data_moris" id="data_moris" required>
                    </li>
                    <li>
                        <button type="submit" name="aumenta">Gravar</button>
                        <button><a href="index.php">Kansela</a></button>
                    </li>
                </ul>
            </form>
            <?php
        }

        if (isset($_GET['edit_dados'])) {
            $id = $_GET['edit_dados'];

            $dados = sel_table("t_estudante WHERE id_estudante='$id'");

            foreach ($dados as $a) :
            ?>

                <h1>Edit Dados Estudante</h1>

                <form action="index.php" method="post">
                    <!-- Hidden -->
                    <input type="text" name="id_estudante" value="<?= $a['id_estudante'] ?>" hidden>
                    <!-- /Hidden -->
                    <ul>
                        <li>
                            <label for="naran_estudante">Naran Estudante:</label>
                            <input type="text" name="naran_estudante" id="naran_estudante" value="<?= $a['naran_estudante'] ?>">
                        </li>
                        <li>
                            <label for="naran_estudante">Sexo:</label>
                            <select name="sexo" id="sexo">
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
                        </li>
                        <li>
                            <label for="data_moris">Data Moris:</label>
                            <input type="date" name="data_moris" id="data_moris" required value="<?= $a['data_moris'] ?>">
                        </li>
                        <li>
                            <button type="submit" name="edit">Edit</button>
                            <button><a href="index.php">Kansela</a></button>
                        </li>
                    </ul>
                </form>

        <?php
            endforeach;
        }
        ?>

    </div>

</body>

</html>