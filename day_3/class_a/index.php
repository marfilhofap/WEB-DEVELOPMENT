<?php

// 1. Array (element)

    $kareta = array("Volvo","BMW","Toyota");
    // var_dump($cars);

    $motor = ["Mio","SupraX","XSR150"];
    // var_dump($motor);

    $identidade = ["Fidel", 26, true];
    // var_dump($identidade);


// - Oinsa hamosu

    // echo $motor; //labele
    // var_dump($motor); - Key (index) ho Value
    // print_r($motor);


// - Hamosu kada element
    // echo $motor[2];


// - Oinsa aumenta dadus ba array 

    // var_dump($motor);
    $motor[] = "KLX"; 
    $motor[] = "KING"; 
    // echo "<br>";
    // var_dump($motor);

// - repetisaun (looping) ba array : For / Foreach

// For
    for ($i=0; $i < 5; $i++) { 
        // echo $motor[$i]."<br>";
    }

    // Uja Count

    for ($i=0; $i < count($motor); $i++) { 
        // echo $motor[$i]."<br>";
    }

// Foreach

    foreach ($motor as $a) {
        // echo $a."<br>";
    }

// - Fo task ruma ba sira

// - Array Multidimentional

    // Oinsa atu halo ba dados barak?
    // Array iha array nia laran

    $studante = [
        ["Marfilho Fidel", "Bidau", 20, "marfilhofap@gmail.com"],
        ["Sarra Maria", "Ailok Laran", 19, "sarramrpt@gmail.com"]
    ];

    foreach ($studante as $a) {
        // echo "Naran: $a[0]<br>";
        // echo "Hela Fatin: $a[1]<br>";
        // echo "Tinan: $a[2]<br>";
        // echo "Email: $a[3]<br>";
        // echo "=========================<br>";
    }

    // Ida leten ida hanaran Array Numeric


// 2. Array Associative

    $koko = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    echo $koko[1][1];

    $exemplu = [
        [
        "naran" => "Fidel", 
        "hela_fatin" => "Bidau", 
        "tinan"=> 12
        ], 
        [
        "naran" => "Lucas", 
        "hela_fatin" => "Likisa", 
        "tinan"=> 19
        ],
        [
        "naran" => "Maria", 
        "hela_fatin" => "Aileu", 
        "tinan"=> 16
        ] 
    ];

    foreach($exemplu as $aa){
        echo "Naran: ".$aa["naran"]."<br>";
        echo "Hela Fatin: ".$aa["hela_fatin"]."<br>";
        echo "Tinan: ".$aa["tinan"]."<br>";
        echo "--------------------------------<br>";
    }

    
?> 




