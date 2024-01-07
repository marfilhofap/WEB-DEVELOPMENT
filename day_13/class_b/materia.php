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
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <h1>BEMVINDO</h1>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="materia.php">Materia</a>
            </li>
        </ul>

        <?php if (!isset($_GET['insert']) && (!isset($_GET['edit_materia']))) { ?>

            <div class="alert alert-info d-flex mt-2">
                <div>
                    <h3>Dados Materia</h3>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="materia.php?insert=true">Insert</a>
                </div>
            </div>

            <table class="table table-hover">
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
                                <a class="btn btn-warning" href="materia.php?edit_materia=<?= $a['id_materia']; ?>">Edit</a>
                                <a class="btn btn-danger" href="materia.php?delete_materia=<?= $a['id_materia']; ?>">Delete</a>
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
                <h3>Insert dados Materia</h3>
            </div>

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

                <div class="alert alert-info d-flex mt-2">
                    <h3>Edit dados Materia</h3>
                </div>

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

    </div>
</body>

</html>