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

<?php include('header.php'); ?>

<div class="container">

    <?php include('menu.php'); ?>

    <?php if (!isset($_GET['insert'])) { ?>
        <div class="alert alert-info d-flex m-2">
            <div>
                <h3>Dadus Estudante</h3>
            </div>

            <div class="ms-auto">
                <a class="btn btn-success" href="relatorio/r_materia.php" target="_blank">Relatorio</a>
                <a class="btn btn-primary" href="materia.php?insert=true">Insert</a>
            </div>

        </div>

        <table id="dt_materia" class="table table-hover">
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

<?php include('footer.php'); ?>