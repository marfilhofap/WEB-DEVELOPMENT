<?php

function operator($num1, $num2, $oper){

    switch ($oper) {
        case '+':
            $calcula = $num1 + $num2;
            break;
        case '-':
            $calcula = $num1 - $num2;
            break;
        case 'x':
            $calcula = $num1 * $num2;
            break;
        case '/':
            $calcula = ($num2 == 0) ? "Undefined" : $num1 / $num2;
            break;
        default:
            $calcula = "Operator la ejiste";
            break;
    }

    return $calcula;

}

?>