<?php
include('dados.php');

if( !isset($_GET['naran']) || empty($_GET['naran']) ){
    header('Location: get.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET 2</title>
</head>
<body>
    <h1>Bemvindo</h1>

    <?php 
    $check_dados = 0;
    foreach($estudante as $x):
        if($_GET['naran'] == $x['naran']):
            $check_dados = 1;
    ?>
        
    <h3>Naran : <?php echo $x['naran']?></h3>
    <h3>Tinan : <?php echo $x['tinan']?></h3>
    <h3>Sexo : <?php echo $x['sexo']?></h3>
    <h3>Hela Fatin : <?php echo $x['hela_fatin']?></h3>

    <h4><a href="get.php">Back</a></h4>

    <?php 
        endif;
    endforeach?>

    <?php
    if($check_dados == 0){
        echo "<h1>Dados la eziste</h1>";
    }
    ?>
    
</body>
</html> 