<?php

// Se buti butaun submit
if (isset($_POST['submit'])) {
    // Foti Valor husi Form
    $num1 = isset($_POST["num1"]) ? $_POST["num1"] : "";
    $num2 = isset($_POST["num2"]) ? $_POST["num2"] : "";
    $operator = isset($_POST["operator"]) ? $_POST["operator"] : "";

    // Include the calculator function
    include "function.php";

    // Check se valor hotu numerico
    if (is_numeric($num1) && is_numeric($num2)) {
        // Bolu Funsaun Calculator
        $cal = calculator($num1, $num2, $operator);

        $rezultadu = "Rejultadu: $num1 $operator $num2 = " . $cal;
    } else {
        $rezultadu = "Favor hatama valor nebe validu";
    }
}
?>

<!DOCTYPE html>
<head>
    <title>Calculator Simples</title>
</head>
<body>
    <h2>Calculator Simples</h2>

    <ul>
        <form action="" method="post">
            
            <li>
                <label for="num1">Numeru 1:</label>
                <input type="text" name="num1" required>
            </li>
            
            <li>
                <label for="operator">Operator (+, -, *, /):</label>
                <input type="text" name="operator" required>
            </li>
            
            <li>
                <label for="num2">Numeru 2:</label>
                <input type="text" name="num2" required>
            </li>
            
            <li>
                <button type="submit" name="submit">Calcula</button>
            </li>
            
        </form>
    </ul>

    <h3>
        <?php 

        if( isset($rezultadu) ){
            echo $rezultadu;
        }
        ?>
    </h3>
</body>
</html>
