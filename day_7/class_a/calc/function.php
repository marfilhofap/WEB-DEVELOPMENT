<?php 

// Kria Funcao Calculator
function calculator($num1, $num2, $operator) {
    switch ($operator) {
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
            // Check se la dividir ba Zero
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Undefined";
            }
            break;
        default:
            $result = "Error: operator invalidu";
            break;
    }

    return $result;
}

?>