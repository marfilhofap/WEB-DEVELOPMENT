<?php
$estudante = [
    [
        // 'Key' => 'value'
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
    ],
    [
        'naran' => 'Rui',
        'sexo' => 'M',
        'tinan' => 20,
        'hela_fatin' => 'Kampung Baru',
    ]
];

?>


<!DOCTYPE html>
<head>
    <title>Aprende GET</title>
</head>
<body>

<h1>Aprende konaba GET</h1>

    <ul>

    <?php foreach($estudante as $x) {?>

        <li>
            <a href="get2.php?naran=<?= $x['naran']?>&sexo=<?= $x['sexo']?>">
                <?= $x['naran']?>
            </a>
        </li>

    <?php } ?>

    

    </ul>
    
</body>
</html>

<!-- 2048 -->
