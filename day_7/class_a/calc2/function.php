<?php
function calcula($num1, $num2, $oper){
    switch($oper){
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if( $num2 == 0){
                $result = 'Undefined';
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = 'Operator Invalidu';
            break;
    }
    return $result;
}
?>