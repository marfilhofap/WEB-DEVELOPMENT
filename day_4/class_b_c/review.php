<?php

// Array

    // - maneira 1:
    // $naran = array("Fidel", "Maria", "Ana", "Ticya", "Lidia");

    // - maneira 2:
    // $naran = ["Fidel", "Maria", "Ana", "Ticya", "Lidia"];

    // var_dump($naran);

    // echo $naran[4];

    // foreach($naran as $x){
    //     echo $x."<br>";
    // }

    // for ($i=1; $i < count($naran) ; $i++) { 
    //     echo $naran[$i]."<br>";
    // }

    // Multidimentional Array
    // Numeric (Index)

    // $estudante = [
    //     ['Fidel', 26, 'M', 'Bidau'],
    //     ['John', 21, 'M', 'Hera'], 
    //     ['Ticya', 24, 'F', 'Aimutin'], 
    //     ['Ana', 23, 'F', 'Surikmas'], 
    // ];

    // 00   01   02   03
    // 10   11   12   13
    // 20   21   22   23
    // 30   31   32   33

    // var_dump($estudante);
    // echo $estudante[2][1];

    // foreach($estudante as $x){
    //     echo "Naran : ".$x[0]."<br>";
    //     echo "Tinan : ".$x[1]."<br>";
    //     echo "Sexo : ".$x[2]."<br>";
    //     echo "Hela Fatin : ".$x[3]."<br>";
    //     echo "---------------------------------<br>";
    // }

    // Associative array
    // String

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
    
    ];

    // var_dump($estudante);
    // echo $estudante[0]['hela_fatin'];

    foreach($estudante as $x){
        echo "Naran : ".$x['naran']."<br>";
        echo "Tinan : ".$x['tinan']."<br>";
        echo "Sexo : ".$x['sexo']."<br>";
        echo "Hela Fatin : ".$x['hela_fatin']."<br>";
        echo "---------------------------------<br>";
    }
?>