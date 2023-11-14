<?php 
include('dados.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case Study</title>
</head>
<body>
<h1>Lista Estudante :</h1>
<ul>
    <?php foreach($estudante as $x):?>
        <li>
            <a href="detalho.php?id=<?=$x['id_estudante']?>">
                <?=$x['naran']?>
            </a>
        </li>
    <?php endforeach?>
</ul>
</body>
</html>