<?php
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>

    <?php if (!isset($_GET['insert']) && !isset($_GET['edit'])) { ?>

        <h1>Estudante nia Materia</h1>
        <p><a href="aula.php?insert=true">Insert</a></p>
        <table border="1">
            <thead>
                <td>No</td>
                <td>Naran</td>
                <td>Sexo</td>
                <td>Materia</td>
                <td>Asaun</td>
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
                        <td>
                            <a href="aula.php?edit=<?= $a['id_aula']; ?>">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    <?php }

    if (isset($_GET['insert']) && $_GET['insert'] == 'true') { ?>
        <h1>Insert Estudante nia materia</h1>

        <form action="aula.php" method="post">
            <ul>
                <li>
                    <label for="naran_estudante">Naran Estudante:</label>
                    <select name="id_estudante" id="naran_estudante">
                        <option value="" selected hidden>- Hili estudante -</option>
                        <?php
                        $estudante = sel_table('t_estudante order by naran_estudante');
                        foreach ($estudante as $a) {
                        ?>
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
    if (isset($_GET['edit']) && !empty($_GET['edit'])) {

        $id_aula = $_GET['edit'];
        $dados_aula = sel_table("t_aula where id_aula='$id_aula'");
        foreach ($dados_aula as $b) {
        ?>
            <h1>Edit Estudante nia materia</h1>

            <form action="aula.php" method="post">
                <input type="text" name="id_aula" class="id_aula" value="<?= $id_aula ?>" hidden>
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

</body>

</html>