<?php 
include('function.php');
$dados = select_tabela('t_materia');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
    
<h1>Lista Materia</h1>

<p><a href="index.php">Lista Estudante</a></p>

<table border="1">
    <thead>
        <td>No</td>
        <td>Materia</td>
    </thead>
    <tbody>
        <?php
        $no = 1; 
        foreach($dados as $a){
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $a['materia']?></td>
        </tr>
        <?php }?>
    </tbody>
</table>

</body>
</html>
