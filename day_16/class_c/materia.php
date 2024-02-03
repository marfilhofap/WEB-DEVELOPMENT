<?php
include('session_cont.php');
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


        <div class="alert alert-info d-flex mt-2">
            <div>
                <h3>Dados Materia</h3>
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
                            <td>
                                <a class="btn btn-warning" href="materia.php?edit_dados=<?= $a['id_materia'] ?>">edit</a>
                                <a class="btn btn-danger" href="materia.php?delete_dados=<?= $a['id_materia'] ?>">Delete</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    <?php
    }

    if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
    ?>

        <div class="alert alert-primary d-flex mt-2">
            <h3>Insert Dados Materia</h3>
        </div>

        <form action="materia.php" method="post">

            <div class="row">
                <div class="col-md-6">
                    <label for="materia" class="form-label">Materia:</label>
                    <input class="form-control" type="text" name="materia" id="materia">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <button class="btn btn-primary" type="submit" name="insert">Save</button>
                    <a class="btn btn-secondary" href="materia.php">Kansela</a>
                </div>
            </div>

        </form>

        <?php
    }
    if (isset($_GET['edit_dados'])) {
        $id = $_GET['edit_dados'];

        $dados = sel_table("t_materia WHERE id_materia='$id'");

        foreach ($dados as $a) :
        ?>

            <div class="alert alert-warning d-flex mt-2">
                <h3>Edit Dados Materia</h3>
            </div>

            <form action="materia.php" method="post">

                <div class="row">
                    <div class="col-md-6">
                        <label for="materia" class="form-label">Materia:</label>
                        <input type="text" name="id_materia" value="<?= $id ?>" hidden>
                        <input class="form-control" type="text" name="materia" id="materia" value="<?= $a['materia'] ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                        <a class="btn btn-secondary" href="materia.php">Kansela</a>
                    </div>
                </div>

            </form>

    <?php
        endforeach;
    } ?>

</div>

<?php include('footer.php'); ?>