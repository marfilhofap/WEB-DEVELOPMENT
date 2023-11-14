<?php 
// 1. Repetition :

// 1.1 For

    /*

    for (inicialization, condition, increment/drecrement){
        durante kondisaun true, sei repete ida ne.
    }

    Increment ++ hanesan +1
    Decrement -- hanesan -1

    */

    for($i = 1; $i <= 5; $i++){ // 1 - 5
        // echo $i." Fidel<br>";
    }

// 1.2 While

    $i = 10;
    while($i <= 5){
        // echo "$i ha'u Miguel<br>";

        // echo $i.' hau Miguel<br>';

        $i++;
    }
    
// 1.3 Do While

    $k = 1;
    do{
        // echo "$k ha'u Miguel<br>";

        $k++;
    } while ($k <= 5);


// 1.4 Foreach : Sei aprende iha array nian;

// 2. Conditioning :

// 2.1 If, else

    $idade = 30;

    if($idade >= 18){
        // echo "Bele Namora ona";
    } else {
        // echo "Keta lai, Ama siak";
    }

// 2.2 If, else if, else

    if($idade <= 18){
        // echo "Keta lai, Ama siak";
    } else if($idade <= 24){
        // echo "Bele Namora, Maibe focus escola";
    } else {
        // echo "Bele lansung Pelaminan";
    }

    // Mini Test:
    /*
    A = 8.5 - 10
    B = 7.0 - 8.4
    C = 5.6 - 6.9
    D = 4.6 - 5.5
    E = 0 - 4.5

    1 Fo sai Letra tuir kada valor
    2 Fo sai Passa ka lae tuir kada Valor (PASSA : A, B, C; RECURSO: D; LA-PASSA: E)
    */

    $valor = 5;
    
    // Maneira A
    // if($valor >= 8.5 && $valor <= 10){ 
    //     echo "PASSA ho valor $valor (A)";
    // } else if($valor >= 7.0 && $valor <= 8.4){
    //     echo "PASSA ho valor $valor (B)";
    // } else if($valor >= 5.6 && $valor <= 6.9){
    //     echo "PASSA ho valor $valor (C)";
    // }else if($valor >= 4.6 && $valor <= 5.5){
    //     echo "RECURSO ho valor $valor (D)";
    // } else if($valor >= 0 && $valor <= 4.5){
    //     echo "LA-PASSA ho valor $valor (E)";
    // } else {
    //     echo "LAIHA CLASSIFICACAO";
    // }

        // Maneira B
        // if($valor <= 4.5){
        //     echo "LA-PASSA ho valor $valor (E)";
        // } else if($valor <= 5.5){
        //     echo "RECURSO ho valor $valor (D)";
        // } else if($valor <= 6.9){
        //     echo "PASSA ho valor $valor (C)";
        // }else if($valor <= 8.4){
        //     echo "PASSA ho valor $valor (B)";
        // } else if($valor <= 10){
        //     echo "PASSA ho valor $valor (A)";
        // } else {
        //     echo "LAIHA CLASSIFICACAO";
        // }

        // 2.3 ternary

        $sexo = "F";

        $sr = ($sexo == "M") ? "Sr." : "Sra.";

        // echo "Halo $sr";










        // 2.4 Switch

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
        echo "Loron la Ejiste";
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