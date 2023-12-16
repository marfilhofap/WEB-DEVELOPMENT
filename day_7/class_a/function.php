<?php
// User Define Function

function koko(){
    // echo "Ola Mundu";
    return "Diak Ka lae?";
}

// echo koko();

function mtk(){
    $a = 10;
    $b = 11;
    return $a + $b;
}

// echo mtk();

// Define Function ho Parametro

function soma($num1, $num2){
    return $num1 + $num2;
}

echo soma(5, 5);
echo "<br>";
echo soma(2, 7);
echo "<br>";

function calculo($num1, $num2, $oper){
    if($oper == '*'){
        $result = $num1 * $num2;
    } else if($oper == '+'){
        $result = $num1 + $num2;
    }else if($oper == '-'){
        $result = $num1 - $num2;
    }else if($oper == '/'){
        $result = $num1 / $num2;
    } else {
        $result = "Operator '$oper' la ejiste";
    }

    return $result;
}

// echo calculo(10, 5, '+');

function sura($num1, $num2, $num3){

    return $num1 + $num2 * $num3;
}
// echo sura(5, 2, 5);


// Funcao ho Default parametro
function halokafe($type = "cappuccino")
{
    return "Halo Kafe ida konaba $type.";
}
// echo halokafe(); // Halo Kafe ida konaba cappuccino.
echo halokafe("Arabia"); // Halo Kafe ida konaba espresso.
// echo halokafe(null); // Halo Kafe ida konaba .



?>