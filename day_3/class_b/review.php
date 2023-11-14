<?php 
// Review Looping / Repetition  
/*
    for(inisializasaun; Kondisaun; Incre/Decre){

    }
*/
// For
for($i = 1; $i <= 10; $i++){
    // echo "$i <br>";
}

// While
$i = 1;
while($i <= 10){
    // echo "$i <br>";

    $i++;
}

// Do While
$i = 1;
do{
    // echo "$i <br>";

    $i++;
} while ($i <= 10);

// COndition :
// If else

$idade = 20;

if($idade > 0 && $idade <= 17){ // 0 - 17
    // echo "Labele Namora lai, Ama siak";
} else if($idade > 17 && $idade <= 24){ // 18 - 24
    // echo "Bele maibe hafuhu malu hela";
} else {
    // echo "Bele ona, tamba tuan ona"; // 25 ba leten
}

// Ternary

$sexo = "F";

$a = ($sexo == "M") ? "Sr." : "Sra.";

// echo "Bemvindo mai iha hau nia Web $a";

// Switch

$loron = date("l");
switch($loron){
    case "Sunday":
        echo "(Domingo) ".date("d-m-Y");
        break;
    case "Monday":
        echo "(Segunda-Feira) ".date("d-m-Y");
        break;
    case "Tuesday":
        echo "(Tersa-Feira) ".date("d-m-Y");
        break;
    case "Wednesday":
        echo "(Kuarta-Feira) ".date("d-m-Y");
        break;
    case "Thursday":
        echo "(Kinta-Feira) ".date("d-m-Y");
        break;
    case "Friday":
        echo "(Sexta-Feira) ".date("d-m-Y");
        break;
    case "Saturday":
        echo "(Sabado) ".date("d-m-Y");
        break;
    default:
        echo "Loron la EJiste";
        break;
}


$valor = "A";
switch($valor){
    case "A":
    case "B":
    case "C":
        echo "PASSA";
        break;
    case "D":
        echo "RECURSO";
        break;
    case "E":
        echo "LA PASSA";
        break;
    default:
        echo "LA EZISTE";
        break;
}
?>