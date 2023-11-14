<?php
// 1. Repetition :

// 1.1 For

    /*
    for (inicializatioon, condition, increment/drecrement){
        durante kondisaun true, sei repete ida ne.
    }
    

    for ($i=0; $i < 10; $i++) { 
        echo "Hello World <br>";
    }

    */


// 1.2 while

    /*
    $i = 0;
    while ($i < 10) {
        echo "Hello World <br>";
        $i++;
    }
    */



// 1.3 do while

    /*
    $i = 0;
    do{
        echo "Hello World <br>";
        $i++;
    } while ($i < 0);
    */



    /*
    
    <table border="1">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>


    for ($i = 1; $i <= 3; $i++) :
    endfor;

    */ 

// 1.4 Foreach : Sei aprende iha array nian;

// 2. Conditioning

// 2.1 If, else

    /*
    - If : True
    - Else : False

    $x = 10
    if($x < 20){
        echo "sim";
    } else {
        echo "Lae";
    }
    */

// 2.2 If, else if, else

    /*
    - If : True 1
    - else if : True 2
    - Else : False

    $x = 20
    if($x < 19){
        echo "sim";
    } else if($x == 20){
        echo "hanesan"
    }else {
        echo "Lae";
    }
    */

// 2.3 ternary

    /*
    $age = 25;
    $canVote = ($age >= 18) ? "Yes" : "No";
    echo "Bele Vota? $canVote";

    $age = 25;
    $gender = 'male';
    $activity = ($age >= 18) ? ($gender === 'male' ? 'Play football' : 'Play volleyball') : 'Sorry, not eligible for any activity';
    echo "Can this person participate in an activity? $activity";
    */


// 2.4 switch

    /*
    $loron = "Segunda";

    switch ($loron) {
        case "Segunda":
            echo "Loron baruk ten";
            break;
        case "Tersa":
            echo "Sei barak oituan";
            break;
        case "Kuarta":
            echo "Komesa Badinas";
            break;
        case "Kinta":
            echo "badinas ba servisu ona";
            break;
        case "Sesta":
            echo "Asik aban Weekeend";
            break;
        default:
            echo "Hore ohin weekend!";
    }
    */

?>




