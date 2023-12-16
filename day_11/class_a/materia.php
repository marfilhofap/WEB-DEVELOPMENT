<?php
include('function.php');
$dados = select_table('t_materia order by materia ASC');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
    <ul>
        <li>
            <h3><a href="index.php">Lista Estudante</a></h3>
        </li>
        <li>
            <h1>Lista Materia</h1>
        </li>
    </ul>
    <table border="1">
        <thead>
            <td>No</td>
            <td>Materia</td>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach($dados as $a):
            ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $a['materia']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>