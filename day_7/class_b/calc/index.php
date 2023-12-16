<?php

if( isset($_POST['calcular']) ){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['operator'];

    if( is_numeric($num1) && is_numeric($num2)){

        include('function.php');

        $cal = operator($num1, $num2, $oper);

        $resultado = "Resultadu husi $num1 $oper $num2 = $cal";

    } else {
        $resultado = 'Dadus Laos Numeric';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculator</title>
</head>
<body>

<h1>Mini Calculator</h1>

<form action="" method="post">
    <ul>
        <li>
            <label for="num1">Numeru 1: </label>
            <input type="text" name="num1" id="num1" placeholder="ense numeru 1">
        </li>
        <li>
            <label for="operator">Operator: </label>
            <select name="operator" id="operator">
                <option value="" selected hidden>hili operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="x">x</option>
                <option value="/">/</option>
            </select>
        </li>
        <li>
            <label for="num2">Numeru 2: </label>
            <input type="text" name="num2" id="num2" placeholder="ense numeru 2">
        </li>
        <li>
            <button type="submit" name="calcular">Calcular</button>
        </li>
    </ul>

</form>

<h3>
    <?= isset($resultado) ?  $resultado : ''?>
</h3>
    
</body>
</html>