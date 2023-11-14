<?php 
if(!isset($_GET['id']) || empty($_GET['id'])){
    header("Location: index.php");
}

include('dados.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case Study</title>
</head>
<body>

<h1>Lista Estudante</h1>

<ul>
    <?php 
    $check_id = 0;
    foreach($estudante as $x){
        
        if($x['id_estudante'] == $_GET['id']){
            $check_id = 1;
            ?>

            <li> <img src="<?=$x['foto']?>" alt="<?=$x['naran']?>" height="200"></li>
            <li> <?=$x['naran']?> </li>
            <li><?=$x['tinan']?> </li>
            <li><?=$x['sexo']?> </li>
            <li><?=$x['hela_fatin']?> </li>

    <?php } 
    }

    if($check_id == 0){
        echo '<li> Deskulta, Dadus husi Estudante ne\'e laiha</li>';
        // Bele mos:  echo "<li> Deskulta, Dadus husi Estudante ne'e laiha</li>";
    } ?>

</ul>

<a href="index.php">Back</a>
    
</body>
</html>