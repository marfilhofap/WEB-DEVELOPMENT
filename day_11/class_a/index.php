<?php
include('function.php');

if (isset($_POST['submit'])) {

    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $rejultado = insert_estudante($naran_estudante, $sexo, $data_moris);
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $rejultado = edit_estudante($id, $naran_estudante, $sexo, $data_moris);
}

if (isset($_GET['delete_id'])) {
    $naran_table = 't_estudante';
    $p_key = 'id_estudante';
    $value = $_GET['delete_id'];

    $rejultadu = delete($naran_table, $p_key, $value);
    header('Location: index.php');
}

$dados = select_table('t_estudante order by naran_estudante ASC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
</head>

<body>

    <?php if (!isset($_GET['insert']) && !isset($_GET['edit_id'])) { ?>

        <ul>
            <li>
                <h1>Lista Estudante</h1>
            </li>
            <li>
                <h3><a href="materia.php">Lista Materia</a></h3>
            </li>
            <li>
                <h3><a href="index.php?insert=true">INSERT</a></h3>
            </li>
        </ul>

        <table border="1">
            <thead>
                <td>No</td>
                <td>Naran</td>
                <th>Sexo</th>
                <th>Data Moris</th>
                <th>Asaun</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dados as $a) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <a href="index.php?edit_id=<?= $a['id_estudante'] ?>">
                                <?= $a['naran_estudante'] ?>
                            </a>
                        </td>
                        <td><?= $a['sexo'] == 'M' ? 'Mane' : 'Feto' ?></td>
                        <td><?= $a['data_moris'] ?></td>
                        <td>
                            <a href="index.php?delete_id=<?= $a['id_estudante'] ?>">
                                delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php }
    if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
    ?>

        <h1>Insert dados Estudante</h1>

        <form action="index.php" method="post">
            <ul>
                <li>
                    <label for="naran_estudante">Naran Estudante : </label>
                    <input type="text" name="naran_estudante" id="naran_estudante" required>
                </li>
                <li>
                    <label for="sexo">Sexo : </label>
                    <select name="sexo" id="sexo">
                        <option value="" selected hidden>- hili sexo -</option>
                        <option value="M">Mane</option>
                        <option value="F">Feto</option>
                    </select>
                </li>
                <li>
                    <label for="data_moris">Data Moris : </label>
                    <input type="date" name="data_moris" id="data_moris" required>
                </li>
                <li>
                    <button type="submit" name="submit">Save</button>
                    <button><a href="index.php">Kansela</a></button>
                </li>
            </ul>

        </form>

        <?php
    }
    if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $dados_edit = select_table("t_estudante where id_estudante='$id'");

        foreach ($dados_edit as $a) :
        ?>

            <h1>Edit dados Estudante</h1>

            <form action="index.php" method="post">
                <ul>
                    <li>
                        <label for="naran_estudante">Naran Estudante : </label>
                        <input type="text" value="<?= $id ?>" name="id" hidden>
                        <input type="text" name="naran_estudante" id="naran_estudante" value="<?= $a['naran_estudante'] ?>" required>
                    </li>
                    <li>
                        <label for="sexo">Sexo : </label>
                        <select name="sexo" id="sexo">
                            <?php
                            if ($a['sexo'] == 'M') {
                                echo '<option value="M" selected>Mane</option>
                                <option value="F">Feto</option>';
                            } else if ($a['sexo'] == 'F') {
                                echo '<option value="M">Mane</option>
                                <option value="F" selected>Feto</option>';
                            }
                            ?>

                        </select>
                    </li>
                    <li>
                        <label for="data_moris">Data Moris : </label>
                        <input type="date" name="data_moris" id="data_moris" value="<?= $a['data_moris'] ?>" required>
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

</body>

</html>