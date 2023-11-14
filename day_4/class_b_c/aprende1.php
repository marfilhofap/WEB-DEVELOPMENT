<?php
// Variable Scope

// Local :
// $x = 12;
// echo $x;

// Global :
// function hamosuX(){
//     global $x;
//     echo $x;
// }

// hamosuX();


// Superglobal
// Bele uja iha fatin nebe deit;
// Bele uja bainhira deit
// Sem declara fali


// var_dump($_SERVER);
// echo $_SERVER['HTTP_HOST'];

// GET

// var_dump($_GET);

$estudante = [
    [
        'naran' => 'Fidel', 
        'tinan' => 26, 
        'sexo' => 'M', 
        'hela_fatin' => 'Bidau'
    ],
    [
        'sexo' => 'M', 
        'naran' => 'Jonas', 
        'tinan' => 22, 
        'hela_fatin' => 'Hera'
    ],
    [
        'sexo' => 'F', 
        'naran' => 'Mila', 
        'tinan' => 17, 
        'hela_fatin' => 'Surikmas'
    ],

];

// $naran = 'Fidel';

?>

<!DOCTYPE html>
<head>
    <title>Aprende GET</title>
</head>
<body>
    <h1>Pajina 1</h1>

<?php foreach($estudante as $x):?>
    <ul>
        <li>
            <a href="aprende2.php?naran=<?= $x['naran']?>">
                <?= $x['naran']?>
            </a>
        </li>
    </ul>

<?php endforeach?>

</body>
</html>