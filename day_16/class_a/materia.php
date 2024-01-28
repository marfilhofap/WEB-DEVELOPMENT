<?php
include('session_conf.php');
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

<?php include('header.php'); ?>

<div class="container">

    <?php include('menu.php') ?>

    <?php
    if (!isset($_GET['insert']) && !isset($_GET['edit_dados'])) {

    ?>

        <div class="alert alert-info d-flex m-2">
            <div>
                <h3>Dadus Materia</h3>
            </div>
            <?php if ($admin == 'admin') : ?>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="materia.php?insert=true">Insert</a>
                </div>
            <?php endif; ?>
        </div>

        <table id="dt_materia" class="table table-hover">
            <thead>
                <td>No</td>
                <td>Materia</td>
                <?php if ($admin == 'admin') : ?>
                    <td>Asaun</td>
                <?php endif; ?>
            </thead>
            <tbody>
                <?php foreach ($dados as $a) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['materia'] ?></td>
                        <?php if ($admin == 'admin') : ?>
                            <td><a class="btn btn-warning" href="materia.php?edit_dados=<?= $a['id_materia'] ?>">edit</a>
                                <a class="btn btn-danger" href="materia.php?delete_dados=<?= $a['id_materia'] ?>">Delete</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    <?php
    }

    if (isset($_GET['insert']) && $_GET['insert'] == 'true' && $admin == 'admin') {
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
    if (isset($_GET['edit_dados']) && $admin == 'admin') {
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

<?php include('footer.php'); ?>