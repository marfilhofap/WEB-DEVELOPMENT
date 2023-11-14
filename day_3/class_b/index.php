<?php
// Array

// - maneira 1:
    // $naran = array("Fidel", "Maria", "Ana", "Ticya", "Lidia");

// - maneira 2:
    $naran = ["Fidel", "Maria", "Ana", "Ticya", "Lidia"];

    // echo $naran[1];
    // var_dump($naran);

// - Aumenta dados ba array
    // $naran[] = "John";
    // echo $naran[5];

    $naran[] = "John";
    $naran[] = "Jose";

// - Repetition / Looping : For & Foreach

    for($i = 0; $i < count($naran); $i++){
        // echo $naran[$i]."<br>";
    }

    $exemplu = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

    // for ($i = 0; $i < count($exemplu); $i++){
    //     echo $exemplu[$i];
    // }

// - Foreach

    foreach($exemplu as $a){
        // echo $a."<br>";
    }



    // $estudante = ["Matcho", "M", 20, "Fomento"];

    












?>