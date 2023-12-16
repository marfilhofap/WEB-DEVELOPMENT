<?php
include('function.php');
$dados = select_tabela('t_materia order by materia ASC');

if (isset($_POST['gravar'])) {
    if (!empty($_POST['materia'])) {
        $materia = $_POST['materia'];

        $rejultadu = insert_materia($materia);

        header('Location: materia.php');
    }
}

if (isset($_POST['edit_materia'])) {
    $id_materia = $_POST['id_materia'];
    $materia = $_POST['materia'];

    $resultado = edit_materia($id_materia, $materia);
    header('Location: materia.php');
}

if (isset($_GET['delete_materia'])) {
    $naran_table = 't_materia';
    $p_key = 'id_materia';
    $value = $_GET['delete_materia'];

    $resultado = delete($naran_table, $p_key, $value);
    header('Location: materia.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
</head>

<body>

    <?php if (!isset($_GET['insert']) && (!isset($_GET['edit_materia']))) { ?>

        <h1>Lista Materia</h1>

        <p><a href="index.php">Lista Estudante</a></p>
        <p><a href="materia.php?insert=true">Insert</a></p>

        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Materia</td>
                    <td>Asaun</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dados as $a) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['materia'] ?></td>
                        <td>
                            <a href="materia.php?edit_materia=<?= $a['id_materia']; ?>">Edit</a>
                            <a href="materia.php?delete_materia=<?= $a['id_materia']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php
    }
    if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
    ?>

        <h2>Insert dados Materia</h2>
        <form action="materia.php" method="post">
            <ul>
                <li>
                    <label for="materia">Materia:</label>
                    <input type="text" name="materia" id="materia" required>
                </li>

                <li>
                    <button type="submit" name="gravar">Save</button>
                    <button><a href="materia.php">Kansela</a></button>
                </li>
            </ul>
        </form>

        <?php
    }

    if (isset($_GET['edit_materia'])) {
        $id_materia = $_GET['edit_materia'];
        $dados_materia = select_tabela("t_materia WHERE id_materia='$id_materia'");

        foreach ($dados_materia as $loop) :
        ?>

            <h2>Edit dados Materia</h2>
            <form action="materia.php" method="post">
                <input type="text" name="id_materia" value="<?= $id_materia; ?>" hidden>
                <ul>
                    <li>
                        <label for="materia">Materia:</label>
                        <input type="text" name="materia" id="materia" value="<?= $loop['materia']; ?>" required>
                    </li>
                    <li>
                        <button type="submit" name="edit_materia">Save</button>
                        <button><a href="materia.php">Kansela</a></button>
                    </li>
                </ul>
            </form>

    <?php
        endforeach;
    }
    ?>

</body>

</html>