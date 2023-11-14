<?php 
$estudante = [
    [
        'id_estudante' => 1,
        'naran' => 'Fidel Pereira',
        'tinan' => 23,
        'sexo' => 'M',
        'hela_fatin' => 'Bidau',
        'foto' => '1.JPG'
    ],
    [
        'id_estudante' => 2,
        'naran' => 'Nelson dos Santos',
        'tinan' => 25,
        'sexo' => 'M',
        'hela_fatin' => 'Aimutin',
        'foto' => '2.JPG'
    ],
    [
        'id_estudante' => 3,
        'naran' => 'Maria da costa',
        'tinan' => 24,
        'sexo' => 'F',
        'hela_fatin' => 'Caicoli',
        'foto' => '3.JPG'
    ],
    [
        'id_estudante' => 4,
        'naran' => 'Lucas de Deus',
        'tinan' => 25,
        'sexo' => 'M',
        'hela_fatin' => 'Fomento',
        'foto' => '4.JPG'
    ],

]
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