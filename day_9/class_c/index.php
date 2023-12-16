<?php
include('function.php');
$no = 1;
$table = sel_table('t_estudante order by naran_estudante ASC ');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Dadus Estudante</h1>
    <?php 
    foreach($table as $a){
        echo $no++.'. '.$a['naran_estudante'].' ('.$a['sexo'].')<br>';
    }
    ?>
</body>
</html>