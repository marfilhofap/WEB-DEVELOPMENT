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
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <ul class="nav nav-pills m-2">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="materia.php">Materia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aula.php">Aula</a>
            </li>
        </ul>

        <?php
        if (!isset($_GET['insert']) && !isset($_GET['edit_dados'])) {

        ?>

            <div class="alert alert-info d-flex m-2">
                <div>
                    <h3>Dadus Materia</h3>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="materia.php?insert=true">Insert</a>
                </div>
            </div>

            <table class="table table-hover">
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
                            <td><a class="btn btn-warning" href="materia.php?edit_dados=<?= $a['id_materia'] ?>">edit</a>
                                <a class="btn btn-danger" href="materia.php?delete_dados=<?= $a['id_materia'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        <?php
        }

        if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
        ?>

            <div class="alert alert-info d-flex m-2">
                <div>
                    <h3>Insert Dadus Materia</h3>
                </div>
            </div>
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

    </div>
</body>

</html>