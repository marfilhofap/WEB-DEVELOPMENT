<?php

if( isset($_POST['calcula']) ){
    $num1 = $_POST['num1'];
    $oper = $_POST['operator'];
    $num2 = $_POST['num2'];
    
    if( is_numeric($num1) && is_numeric($num2) ){

        include('function.php');

        $cal = calcula($num1, $num2, $oper);

        $resultadu = "Resultadu husi $num1 $oper $num2 = ".$cal;

    } else {
        $resultadu = 'Dados laos Numerico';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<h1>Mini Calculator</h1>

<form action="" method="post">

    <ul>

        <li>
            <label for="">Numeru 1 :</label>
            <input type="text" name="num1" required placeholder="Ense numeru 1">
        </li>
        <li>
            <label for="">Operator :</label>
            <select name="operator" id="">
                <option value="" selected hidden>- Hili Operator -</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select>
        </li>
        <li>
            <label for="">Numeru 2 :</label>
            <input type="text" name="num2" required placeholder="Ense numeru 2">
        </li>
        <li>
            <button type="submit" name="calcula">Calcula</button>
        </li>

    </ul>

</form>

<h3>
    <?php
    // if( isset($resultadu) ){
    //     echo $resultadu;
    // }

    echo isset($resultadu) ? $resultadu : ''; // Ternary
    ?>
</h3>
    
</body>
</html>