<?php
// Review materia antes : Array

// $estudante = ['Fidel', 'Jonas', 'Andre'];

// $estudante[] = 'Mila';

// foreach($estudante as $a){
//     echo $a;
// }

// for($i = 0; $i < count($estudante); $i++){
//     echo $estudante[$i];
// }


// Multidimentional Array
// Index, Numeric

// $estudante = [
//     ["Fidel Pereira", 19, "M", "Bidau"],
//     ["Sarra Tilman", 29, "F", "Aileu"],
//     ["John Martins", 23, "M", "Likidoe"],
//     ["Maria da Costa", 43, "F", "Lospalos"],
//     ];

//     foreach($estudante as $y){
//         echo "Naran : $y[0] <br>";
//         echo "Tinan : $y[1] <br>";
//         echo "Sexo : $y[2] <br>";
//         echo "Hela-Fatin : $y[3] <br>";
//         echo "-----------------------------------------<br>";
//     }

// Associative Array 
// String

$estudante = [
    [
        "naran" => "Fidel",
        "tinan" => 26,
        "sexo" => "M",
        "hela_fatin" => "Bidau",
    ],
    [
        "hela_fatin" => "Hera",
        "naran" => "John",
        "sexo" => "M",
        "tinan" => 28,
    ]
    ];

    foreach($estudante as $y){
        echo "Naran : ".$y["naran"]."<br>";
        echo "Tinan : ".$y["tinan"]."<br>";
        echo "Sexo : ".$y["sexo"]."<br>";
        echo "Hela Fatin : ".$y["hela_fatin"]."<br>";
        echo "-----------------------------------------<br>";
    }
?>