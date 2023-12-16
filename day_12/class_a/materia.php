<?php
include('function.php');
$dados = select_table('t_materia order by materia ASC');

if (isset($_POST['gravar'])) {
    $materia = $_POST['materia'];

    $rejultado = insert_materia($materia);
    header('Location: materia.php');
}

if (isset($_POST['edit'])) {
    $id_materia = $_POST['id_materia'];
    $materia = $_POST['materia'];

    $rejultado = edit_materia($id_materia, $materia);
    header('Location: materia.php');
}

if (isset($_GET['delete'])) {
    $naran_table = 't_materia';
    $p_key = 'id_materia';
    $value = $_GET['delete'];

    $rejultadu = delete($naran_table, $p_key, $value);
    header('Location: materia.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
</head>

<body>
    <?php if (!isset($_GET['insert']) && !isset($_GET['edit'])) { ?>
        <ul>
            <li>
                <h3><a href="index.php">Lista Estudante</a></h3>
            </li>
            <li>
                <h1>Lista Materia</h1>
            </li>
            <p><a href="materia.php?insert=true">Insert</a></p>
        </ul>
        <table border="1">
            <thead>
                <td>No</td>
                <td>Materia</td>
                <td>Asaun</td>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dados as $a) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['materia'] ?></td>
                        <td>
                            <a href="materia.php?edit=<?= $a['id_materia'] ?>">Edit</a>
                            <a href="materia.php?delete=<?= $a['id_materia'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php
    }

    if (isset($_GET['insert']) && $_GET['insert'] == 'true') { ?>

        <h2>Insert Materia</h2>

        <form action="materia.php" method="post">

            <ul>
                <li>
                    <label for="materia">Materia</label>
                    <input type="text" name="materia" id="materia">
                </li>
                <li>
                    <button type="submit" name="gravar">Insert</button>
                    <button><a href="materia.php">Kalsela</a></button>
                </li>
            </ul>
        </form>

    <?php } ?>


    <?php
    if (isset($_GET['edit'])) {

        $id_materia = $_GET['edit'];
        $dados_materia = select_table("t_materia WHERE id_materia = '$id_materia'");
        foreach ($dados_materia as $a) {
    ?>
            <h2>Edit Materia</h2>
            <form action="materia.php" method="post">
                <input type="text" name="id_materia" value="<?= $a['id_materia'] ?>" hidden>
                <ul>
                    <li>
                        <label for="materia">Materia</label>
                        <input type="text" name="materia" id="materia" value="<?= $a['materia'] ?>">
                    </li>
                    <li>
                        <button type="submit" name="edit">Edit</button>
                        <button><a href="materia.php">Kalsela</a></button>
                    </li>
                </ul>
            </form>
    <?php
        }
    }
    ?>

</body>

</html>