<?php
include('function.php');
$t_estudante = select_table('v_estudante_materia');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    
    <h1>SIMPLE CRUD</h1>

    <a href="insert.php">Insert</a>

    <table border="1">
        <thead>
            <th>No</th>
            <th>Naran</th>
            <th>Sexo</th>
            <th>Data Moris</th>
            <th>Mateira</th>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($t_estudante as $loop):
            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $loop['naran_estudante']?></td>
                <td><?= $loop['sexo']?></td>
                <td><?= $loop['data_moris']?></td>
                <td><?= $loop['materia']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>

</body>
</html>