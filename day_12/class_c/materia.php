<?php
include('function.php');
$no = 1;
$dados = sel_table('t_materia order by materia ASC ');

if (isset($_POST['insert'])) {

    $materia = $_POST['materia'];
    $resultado = insert_materia($materia);
    header('Location: materia.php');
}

if (isset($_POST['edit'])) {

    $id = $_POST['id_materia'];
    $materia = $_POST['materia'];
    $resultado = edit_materia($id, $materia);
    header('Location: materia.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
</head>

<body>

    <?php
    if (!isset($_GET['insert']) && !isset($_GET['edit_dados'])) {

    ?>

        <h1>Dadus Materia</h1>
        <p><a href="index.php">Dadus Estudante</a></p>
        <p><a href="materia.php?insert=true">Insert</a></p>
        <table border="1">
            <thead>
                <td>No</td>
                <td>Materia</td>
                <td>Asaun</td>
            </thead>
            <tbody>
                <?php foreach ($dados as $a) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['materia'] ?></td>
                        <td><a href="materia.php?edit_dados=<?= $a['id_materia'] ?>">edit</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    <?php
    }

    if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
    ?>

        <h1>Insert Dados Materia</h1>
        <form action="materia.php" method="post">

            <ul>
                <li>
                    <label for="materia">Materia:</label>
                    <input type="text" name="materia" id="materia">
                </li>
                <li>
                    <button type="submit" name="insert">Save</button>
                </li>
            </ul>

        </form>

        <?php
    }
    if (isset($_GET['edit_dados'])) {
        $id = $_GET['edit_dados'];

        $dados = sel_table("t_materia WHERE id_materia='$id'");

        foreach ($dados as $a) :
        ?>

            <h1>Edit Dados Materia</h1>
            <form action="materia.php" method="post">

                <ul>
                    <li>
                        <label for="materia">Materia:</label>
                        <input type="text" name="id_materia" value="<?= $id ?>" hidden>
                        <input type="text" name="materia" id="materia" value="<?= $a['materia'] ?>">
                    </li>
                    <li>
                        <button type="submit" name="edit">Edit</button>
                    </li>
                </ul>

            </form>

    <?php
        endforeach;
    } ?>


</body>

</html>