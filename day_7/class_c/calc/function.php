<?php
function calculator($num1, $num2, $oper){

    switch($oper){
        case '+':
            $resultadu = $num1 + $num2;
            break;
        case '-':
            $resultadu = $num1 - $num2;
            break;
        case 'x':
            $resultadu = $num1 * $num2;
            break;
        case '/':
            $resultadu = ($num2 == 0) ? 'Undefined' : $num1 / $num2;
            break;
        default:
            $resultadu = 'Operator la ejiste';
            break;
    }
    return $resultadu;

}
?>