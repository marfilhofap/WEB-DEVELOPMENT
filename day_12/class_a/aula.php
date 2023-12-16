<?php
include('function.php');
$dados = select_table('v_aula order by naran_estudante ASC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
</head>

<body>
    <?php if (!isset($_GET['insert']) && !isset($_GET['edit'])) { ?>
        <ul>
            <li>
                <h1>Lista Estudante foti materia</h1>
            </li>
        </ul>
        <table border="1">
            <thead>
                <td>No</td>
                <td>Naran</td>
                <td>Sexo</td>
                <td>Data Moris</td>
                <td>Materia</td>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($dados as $a) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $a['naran_estudante'] ?></td>
                        <td><?= $a['sexo'] ?></td>
                        <td><?= $a['data_moris'] ?></td>
                        <td><?= $a['materia'] ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php
    }
    ?>

</body>

</html>