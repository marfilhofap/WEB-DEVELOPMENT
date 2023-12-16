<?php
include('function.php');

$num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
$num2 = isset($_POST['num2']) ? $_POST['num2'] : '';

if( isset($_POST['mais']) ){
    $oper = $_POST['mais'];
} else if( isset($_POST['menus']) ){
    $oper = $_POST['menus'];
} else if( isset($_POST['vezes']) ){
    $oper = $_POST['vezes'];
} else if( isset($_POST['dividir']) ){
    $oper = $_POST['dividir'];
}

if( isset($oper) ){
    if( is_numeric($num1) && is_numeric($num2) ){
        $cal = calculator($num1, $num2, $oper);
    } else {
        $cal = "Numeru lalos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mini Calculator</title>
</head>
<body style="text-align: center;">

<h1><u>Mini Calculator</u></h1>

<form action="" method="post">

    <p><input type="text" name="num1" placeholder="ense numeru" value="<?= $num1?>"></p>
    <p><input type="text" name="num2" placeholder="ense numeru" value="<?= $num2?>"></p>

    <p>
        <input type="submit" name="mais" value="+">
        <input type="submit" name="menus" value="-">
        <input type="submit" name="vezes" value="x">
        <input type="submit" name="dividir" value="/">
    </p>

    <p><input type="text" name="result" readonly placeholder="Resultadu" value="<?= isset($cal) ? $cal : ''?>"></p>

</form>
    
</body>
</html>