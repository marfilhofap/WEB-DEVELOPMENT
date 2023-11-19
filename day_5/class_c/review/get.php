<?php
$estudante = [
    [
        // Key => value
        'naran' => 'Fidel',
        'sexo' => 'M',
        'tinan' => 26,
        'hela_fatin' => 'Bidau Santana',
    ], 
    [
        'naran' => 'Cornelio',
        'sexo' => 'M',
        'tinan' => 21,
        'hela_fatin' => 'Manleuana',
    ],
    [
        'naran' => 'Lila',
        'sexo' => 'F',
        'tinan' => 20,
        'hela_fatin' => 'Hera',
    ]
];

foreach($estudante as $x){
    echo 'Naran : <a href="get2.php?naran='.$x['naran'].'&sexo='.$x['sexo'].'&tinan='.$x['tinan'].'&hela_fatin='.$x['hela_fatin'].'">'.
        $x['naran']
    .'</a>';
    echo "<br>";
}

?>