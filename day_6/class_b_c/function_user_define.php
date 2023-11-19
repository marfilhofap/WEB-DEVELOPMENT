<?php
// User define Function

function koko(){
    echo 'Diak ka lae';
}

// koko();


// -- Define Function ho Parametro
function soma($a, $b, $d){
    $c = $a + $b * $d;
    return $c;
}

// echo soma(5, 5, 2);


// -- Funcao ho Default parametro
function halokafe($tipo = "cappuccino")
{
    return "Halo Kafe ida konaba $tipo.";
}

// echo halokafe(); // Halo Kafe ida konaba cappuccino.
// echo halokafe("espresso"); // Halo Kafe ida konaba espresso.
// echo halokafe(null); // Halo Kafe ida konaba .

?>