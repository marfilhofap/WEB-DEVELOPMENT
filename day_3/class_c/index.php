<?php
// 1. Array

// Maneira 1:
// $naran = array("Fidel", "Jonas", "John", "Rita");

// Maneira 2:
$naran = ["Fidel", "Jonas", "John", "Rita"];

// echo $naran[0];

// var_dump($naran);

// Key ho Value

// For no Foreach

// Aumenta dados ba array

// $naran[] = "Sarra";
// $naran[] = "Lucas";
// $naran[] = "Rita";

for($i = 0; $i < count($naran); $i++){
    // echo $naran[$i]."<br>";
}

// foreach
foreach($naran as $a){
    // echo $a."<br>";
}

// Multidimentional array
$naran = [
        [1, 2, 3, 5], 
        [4, 5, 6], 
        [7, 8, 9]
    ];

// echo $naran[2][0];

// Task 
/* Output :

1   2   3
4   5   6
7   8   9

123456789

*/

for ($i=0; $i < count($naran); $i++) { 
    
    for ($j=0; $j < count($naran[$i]); $j++) {
        // echo $naran[$i][$j];
     }
    //  echo "<br>";
}


$estudante = [
    ["Fidel", 26, "Bidau", "marfilhofap@cfp.gov.tl"],
    ["Nofy", 23, "Ailok Laran", "nofyaf@gmail.com"],
    ["Vidal", 20, "Balide", "vidal123@gmail.com"],
    ["Esly", 18, "Hera", "esly3123@gmail.com"],
    ["Sanny", 16, "Lospalos", "sanny53453@gmail.com"],
    ["Figo", 14, "Ermera", "figo42342@gmail.com"]
];

foreach($estudante as $loop){
    // echo "Naran : $loop[0] <br>";
    // echo "Tinan : $loop[1] <br>";
    // echo "Hela Fatin : $loop[2] <br>";
    // echo "Email : $loop[3] <br>";
    // echo "------------------------------------------------ <br>";
    
}

/*
Array = Key -> Index;
Array Associative = Key - String;
*/


// Associative Array
$estudante = [
    [
    "tinan" => 26, 
    "naran" => "Fidel", 
    "hela_fatin" => "Bidau", 
    "email" =>"marfilhofap@cfp.gov.tl"
    ],
    [
    "email" =>"miguelborges@mof.gov.tl",
    "naran" => "Migy", 
    "tinan" => 28, 
    "hela_fatin" => "Perumnas", 
    ]
];

foreach($estudante as $loop){
    echo "Naran : ".$loop['naran']."<br>";
    echo "Tinan : ".$loop['tinan']."<br>";
    echo "Hela Fatin : ".$loop['hela_fatin']."<br>";
    echo "Email : ".$loop['email']."<br>";
    echo "------------------------------------------------ <br>";
}



?>