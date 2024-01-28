<?php
include('session_conf.php');
include('function.php');
$no = 1;
$dados = sel_table('v_aula order by naran_estudante');

if (isset($_POST['insert'])) {
    $id_estudante = $_POST['id_estudante'];
    $id_materia = $_POST['id_materia'];

    $resultado = insert_aula($id_estudante, $id_materia);
    header('Location: aula.php');
}

if (isset($_POST['edit_aula'])) {
    $id_aula = $_POST['id_aula'];
    $id_estudante = $_POST['id_estudante'];
    $id_materia = $_POST['id_materia'];

    $resultado = edit_aula($id_aula, $id_estudante, $id_materia);
    header('Location: aula.php');
}
?>

<?php include('header.php'); ?>

<div class="container">

    <?php include('menu.php') ?>

    <?php if (!isset($_GET['insert']) && !isset($_GET['edit'])) { ?>

        <div class="alert alert-info d-flex m-2">
            <div>
                <h3>Dadus Aula</h3>
            </div>
            <?php if ($admin == 'admin') : ?>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="aula.php?insert=true">Insert</a>
                </div>
            <?php endif; ?>
        </div>

        <table id="dt_aula" class="table table-hover">
            <thead>
                <td>No</td>
                <td>Naran</td>
                <td>Sexo</td>
                <td>Materia</td>
                <?php if ($admin == 'admin') : ?>
                    <td>Asaun</td>
                <?php endif; ?>
            </thead>
            <tbody>
                <?php
                foreach ($dados as $a) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $a['naran_estudante']; ?></td>
                        <td><?= $a['sexo']; ?></td>
                        <td><?= $a['materia']; ?></td>
                        <?php if ($admin == 'admin') : ?>
                            <td>
                                <a class="btn btn-warning" href="aula.php?edit=<?= $a['id_aula']; ?>">Edit</a>
                                <a class="btn btn-danger" href="aula.php?delete=<?= $a['id_aula']; ?>">Delete</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    <?php }

    if (isset($_GET['insert']) && $_GET['insert'] == 'true' && $admin == 'admin') { ?>

        <div class="alert alert-info d-flex m-2">
            <div>
                <h3>Insert Dadus Aula</h3>
            </div>
        </div>

        <form action="aula.php" method="post">
            <ul>
                <li>
                    <label for="naran_estudante">Naran Estudante:</label>
                    <select name="id_estudante" id="naran_estudante">
                        <option value="" selected hidden>- Hili estudante -</option>
                        <?php
                        $estudante = sel_table('t_estudante order by naran_estudante');
                        foreach ($estudante as $a) { ?>
                            <option value="<?= $a['id_estudante']; ?>"><?= $a['naran_estudante']; ?></option>
                        <?php } ?>
                    </select>
                </li>
                <li>
                    <label for="id_materia">Materia:</label>
                    <select name="id_materia" id="id_materia">
                        <option value="" selected hidden>- Hili Materia -</option>
                        <?php
                        $materia = sel_table('t_materia order by materia');
                        foreach ($materia as $a) {
                        ?>
                            <option value="<?= $a['id_materia']; ?>"><?= $a['materia']; ?></option>
                        <?php } ?>
                    </select>
                </li>
                <li>
                    <button type="submit" name="insert">save</button>
                    <button><a href="aula.php">Kansela</a></button>
                </li>
            </ul>

        </form>

        <?php }
    if (isset($_GET['edit']) && !empty($_GET['edit']) && $admin == 'admin') {

        $id_aula = $_GET['edit'];
        $dados_aula = sel_table("t_aula where id_aula='$id_aula'");
        foreach ($dados_aula as $b) {
        ?>
            <h1>Edit Estudante nia materia</h1>

            <form action="aula.php" method="post">
                <input type="text" name="id_aula" class="id_aula" value="<?= $b['id_aula'] ?>" hidden>
                <ul>
                    <li>
                        <label for="naran_estudante">Naran Estudante:</label>
                        <select name="id_estudante" id="naran_estudante">
                            <option value="" selected hidden>- Hili estudante -</option>
                            <?php
                            $estudante = sel_table('t_estudante order by naran_estudante');
                            foreach ($estudante as $a) {

                                if ($a['id_estudante'] == $b['id_estudante']) {
                                    echo "<option value=" . $a['id_estudante'] . " selected>" . $a['naran_estudante'] . "</option>";
                                } else {
                                    echo "<option value=" . $a['id_estudante'] . ">" . $a['naran_estudante'] . "</option>";
                                }
                            } ?>
                        </select>
                    </li>
                    <li>
                        <label for="id_materia">Materia:</label>
                        <select name="id_materia" id="id_materia">
                            <option value="" selected hidden>- Hili Materia -</option>
                            <?php
                            $materia = sel_table('t_materia order by materia');
                            foreach ($materia as $a) {
                                if ($a['id_materia'] == $b['id_materia']) {
                                    echo "<option value=" . $a['id_materia'] . " selected>" . $a['materia'] . "</option>";
                                } else {
                                    echo "<option value=" . $a['id_materia'] . ">" . $a['materia'] . "</option>";
                                }
                            } ?>
                        </select>
                    </li>
                    <li>
                        <button type="submit" name="edit_aula">save</button>
                        <button><a href="aula.php">Kansela</a></button>
                    </li>
                </ul>

            </form>

    <?php }
    } ?>

</div>

<?php include('footer.php'); ?>