<?php

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

?>

<!DOCTYPE html>
<head>
    <title>Table</title>
</head>
<body>
    
<h1>Table Estudante</h1>

<table border="1">

    <thead>
        <tr>
            <th>Nu</th>
            <th>Naran</th>
            <th>Sexo</th>
            <th>Tinan</th>
            <th>Hela Fatin</th>
        </tr>
    </thead>

    <tbody>
        
            <?php 
            $no = 1;
            foreach($estudante as $x){?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $x['naran']?></td>
                    <td><?= $x['sexo']?></td>
                    <td><?= $x['tinan']?></td>
                    <td><?= $x['hela_fatin']?></td>
                </tr>

            <?php } ?>
        
    </tbody>

</table>

</body>
</html>