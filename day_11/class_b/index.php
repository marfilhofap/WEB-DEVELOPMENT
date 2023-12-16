<?php
include('function.php');
$dados = select_tabela('t_estudante');

if (isset($_POST['gravar'])) {
    if (!empty($_POST['naran_estudante']) && !empty($_POST['sexo']) && !empty($_POST['data_moris'])) {
        $naran_estudante = $_POST['naran_estudante'];
        $sexo = $_POST['sexo'];
        $data_moris = $_POST['data_moris'];
    }
    $rejultadu = insert_estudante($naran_estudante, $sexo, $data_moris);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
</head>

<body>

    <?php if (!isset($_GET['insert'])) { ?>
        <h1>Lista Estudante</h1>

        <p><a href="materia.php">Lista Materia</a></p>
        <p><a href="index.php?insert=true">Insert</a></p>

        <table border="1">
            <thead>
                <td>No</td>
                <td>Naran Estudante</td>
                <td>Sexo</td>
                <td>Data Moris</td>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dados as $a) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['naran_estudante'] ?></td>
                        <td><?= $a['sexo'] ?></td>
                        <td><?= $a['data_moris'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php
    }
    if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
    ?>

        <h2>Insert dados Estudante</h2>
        <form action="index.php" method="post">
            <ul>
                <li>
                    <label for="naran_estudante">Naran Estudante:</label>
                    <input type="text" name="naran_estudante" id="naran_estudante">
                </li>
                <li>
                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo">
                        <option value="" selected hidden>- Hili Sexo -</option>
                        <option value="M">Mane</option>
                        <option value="F">Feto</option>
                    </select>
                </li>
                <li>
                    <label for="data_moris">Data Moris:</label>
                    <input type="date" name="data_moris" id="data_moris">
                </li>
                <li>
                    <button type="submit" name="gravar">Save</button>
                </li>
            </ul>
        </form>

    <?php
    }
    ?>



</body>

</html>