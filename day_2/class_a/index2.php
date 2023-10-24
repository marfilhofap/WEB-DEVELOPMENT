<?php
$valor = 8.7;
// 1. Repetition :

// 1.1 For

/*
    for (inicialization, condition, increment/drecrement){
        durante kondisaun true, sei repete ida ne.
    }
    
    Increment ++ == +1
    Decrement -- == -1
*/

// for($i = 1; $i <= 5; $i++){

//     echo $i.". Fidel <br>";

// }

// While

// $j = 10;

// while($j <= 5){

//     echo $j.". Sarra <br>";

//     $j++;

// }

// Do While

// $k = 10;
// do {
//     echo $k." Mario <br>";
//     $k++;
// } while ($k <= 5);



// 2. Conditioning

// 2.1 If, else

// $a = 10;

// if($a < 5){
//     echo "SIM";
// } else {
//     echo "LAE";
// }

// 2.2 IF, ELSE IF, ELSE

// $idade = 10;

// if($idade <= 18){ // 0 18
//     echo "Labarik";
// } else if($idade <= 30){ // 19 - 30 
//     echo "Jovem";
// } else if($idade <= 40) { // 31 - 40
//     echo "KATUAS NURAK"; 
// } else { // +41
//     echo "KATUAS"; 
// }

/*
A = 8.5 - 10
B = 7.0 - 8.4
C = 5.6 - 6.9
D = 4.6 - 5.5
E = 0 - 4.5
*/
$naran = "Fidel";
$resultadu = "";
$passa = "";

if($valor <= 4.5){ // 0 - 4.5
    $resultadu = "E";
} else if($valor <= 5.5){ // 4.6 - 5.5 
    $resultadu = "D";
} else if($valor <= 6.9) { // 5.6 - 6.9
    $resultadu = "C"; 
} else if($valor <= 8.4) { // 7.0 - 8.4
    $resultadu = "B"; 
} else if($valor <= 10) { // 8.5 - 10
    $resultadu = "A"; 
} else { 
    $resultadu = "Kondisaun Laiha"; 
}

if($resultadu == "E"){
    $passa = "LA PASSA";
} else if ($resultadu == "Kondisaun Laiha"){
    $passa = "LA PASSA";
} else {
    $passa = "PASSA";
}

// echo "Sr. $naran $passa Tamba nia Valor hetan $valor ($resultadu)";



// Ternary 

// Ex : 1
// $a = 10;
// echo ($a <= 20) ? "LOS" : "SALA";
// echo "<br>";

// Ex : 2
// $age = 25;
// $canVote = ($age >= 18) ? "Yes" : "No";
// echo "Bele Vota? $canVote";
// echo "<br>";

// Ex : 3
// $sexo = "M";
// $sr = ($sexo == "M") ? "Sr." : "Sra.";
// echo "Bemvindo $sr";
// echo "<br>";



// 2.4 switch
$loron = date("l");
switch ($loron) {
    case "Sunday":
        echo "Ohin loron Domingo";
        break;
    case "Monday":
        echo "Ohin loron Segunda-Feira";
        break;
    case "Tuesday":
        echo "Ohin loron Tersa-Feira";
        break;
    case "Wednesday":
        echo "Ohin loron Kuarta-Feira";
        break;
    case "Thusday":
        echo "Ohin loron Kinta-Feira";
        break;
    case "Friday":
        echo "Ohin loron Sexta-Feira";
        break;
    case "Saturday":
        echo "Ohin loron Sabado";
        break;
    default:
        echo "Sorry loron la eziste!";
}


?>
