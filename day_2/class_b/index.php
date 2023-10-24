<?php
// Standar Output:

/*
echo "Fidel";
print "Sarra";
var_dump("Rio");
*/

// $naran = "Marfilho Fidel Alvares Pereira";

// var_dump($naran);


// Writing:

// 1. PHP in HTML



// 2. HTML in PHP

/*
echo "<h1>Bemvindo</h1>";
echo "<br><h1>Bemvindo</h1>";
*/



// Variavel:


$naran = "Fidel";
$hela_fatin = "Bidau";
$datamoris = "1997-03-09";

// echo "Ha'u nia naran $naran";
// echo 'Hau nia naran '.$naran;



// Operator

// 1. Arithmetic (+ - * / %)

$x = 11;
$y = 2;

// echo $x * $y;

// 2. concatenate

$naran = "Marfilho";
$apelido = "Pereira";
// echo $naran . " " . $apelido;


// 3. Assignment (=, +=, -=, x=, /=, %=, .=)

/*
$dados = 50;
$dados += 10;
$dados -= 12;
$dados *= 44;
$dados /= 55;

echo $dados;
*/

// 4. Comparison (<, >, <=, >=, ==, !=),

$a = 21;
$b = 21;

// var_dump($a <= 20);
// var_dump($a == $b);

// 5. Identity (===, !==),

// var_dump($a === $b);

// 6. logic (&&, ||, !)

/*
T && T = T 
T && F = F 
F && T = F 
F && F = F 
*/

$x = 6;
var_dump($x < 10 && $x + 2 == 8);

/*
T || T = T 
T || F = T 
F || T = T 
F || F = F 
*/

$x = 4;
var_dump($x < 10 && $x + 2 == 8);



?>

