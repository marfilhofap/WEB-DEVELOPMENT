<?php

// 1. Array

// maneira 1
// $naran = array("Fidel", "Sarra", "Ana", "John");

// Maneira 2
$naran = ["Fidel", "Jonas", "Ana", "Andre", "Jose", "Maria"];

// echo $naran[1];
// var_dump($naran);

// Array : Key no Value

// Oinsa atu aumenta dadus ba array
    $naran[] = "Maxy";
    $naran[] = "Josefina";

// Looping : For no Foreach
// For:
    for($i = 0; $i < count($naran); $i++){
        // echo $naran[$i]."<br>";
    }

// Foreach:
    foreach($naran as $abc){
        // echo $abc."<br>";
    }

    // study case:

        // $estudante = ["Fidel Pereira", 19, "M", "Bidau"];

        // foreach($estudante as $abc){
        //     echo $abc."<br>";
        // }

        $ex = [
                [1, 2, 3], 
                [4, 5, 6], 
                [7, 8, 9],
                [10, 11, 12],
            ];

            /*
            $ex[0][0], $ex[0][1], $ex[0][2], $ex[0][3];
            $ex[1][0], $ex[1][1], $ex[1][2];
            $ex[2][0], $ex[2][1], $ex[2][2];

            */
            // echo $ex[2][0];
            
            // For refere to first array
            // for ($i = 0; $i < count($ex); $i++) {

            //     // For refere to second array
            //     for ($j = 0; $j < count($ex[$i]); $j++) {
            //         echo $ex[$i][$j] . " ";
            //     }
            //     echo "<br>";
            // }


            // foreach($ex as $a){
            //     foreach($a as $b){
            //         echo $b;
            //     }
            //     echo "<br>";
            // }

            // Multidimentional array
            $estudante = [
                ["Fidel Pereira", 19, "M", "Bidau"],
                ["Sarra Tilman", 29, "F", "Aileu"],
                ["John Martins", 23, "M", "Likidoe"],
                ["Maria da Costa", 26, "F", "Lospalos"],
                ];

                foreach($estudante as $y){
                    echo "Naran : $y[0] <br>";
                    echo "Tinan : $y[1] <br>";
                    echo "Sexo : $y[2] <br>";
                    echo "Hela Fatin : $y[3] <br>";
                    echo "-------------------------<br>";
                }


?>