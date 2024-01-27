<?php
include('session_conf.php');
include('function.php');
$dados = select_tabela('t_materia order by materia ASC');

if (isset($_POST['gravar'])) {
    if (!empty($_POST['materia'])) {
        $materia = $_POST['materia'];

        $rejultadu = insert_materia($materia);

        header('Location: materia.php');
    }
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

        <?php include('menu.php'); ?>

        <?php if (!isset($_GET['insert'])) { ?>
            <table class="table table-hover">
                <thead>
                    <td>No</td>
                    <td>Materia</td>
                    <td>Asaun</td>
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
                                <a class="btn btn-warning" href="">Edit</a>
                                <a class="btn btn-danger" href="">Delete</a>
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
        ?>

    </div>

</body>

</html>