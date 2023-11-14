<?php 
$estudante = [
    [
        'id_estudante' => 1,
        'naran' => 'Fidel Pereira',
        'tinan' => 23,
        'sexo' => 'M',
        'hela_fatin' => 'Bidau',
        'foto' => 'foto/1.JPG'
    ],
    [
        'id_estudante' => 2,
        'naran' => 'Nelson dos Santos',
        'tinan' => 25,
        'sexo' => 'M',
        'hela_fatin' => 'Aimutin',
        'foto' => 'foto/2.JPG'
    ],
    [
        'id_estudante' => 3,
        'naran' => 'Maria da costa',
        'tinan' => 24,
        'sexo' => 'F',
        'hela_fatin' => 'Caicoli',
        'foto' => 'foto/3.JPG'
    ],
    [
        'id_estudante' => 4,
        'naran' => 'Lucas de Deus',
        'tinan' => 25,
        'sexo' => 'M',
        'hela_fatin' => 'Fomento',
        'foto' => 'foto/4.JPG'
    ],

];

if(!isset($_GET['id'])){
    header("Location: index.php");
}
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
            <li>
                <img src="<?=$x['foto']?>" alt="<?=$x['naran']?>" width="100px">
            </li>
            <li>
                    <?=$x['naran']?>
            </li>
            <li>
                    <?=$x['tinan']?>
                
            </li>
            <li>
                    <?=$x['sexo']?>
            </li>
            <li>
                    <?=$x['hela_fatin']?>
            </li>
    <?php } 
    }
    if($check_id == 0){
    ?>

        <li>
                
                Deskulta, Dadus husi Estudante ne laiha
            
        </li>

    <?php } ?>
</ul>

<a href="index.php">
    Back
</a>
    
</body>
</html>