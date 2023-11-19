<?php
// Built-in Function

// String Functions:
$originalString = "Hello, World!";
echo strlen($originalString); // Output: 13
echo str_replace("World", "PHP", $originalString); // Output: Hello, PHP!
echo strtolower($originalString); // Output: hello, world!
echo strtoupper($originalString); // Output: HELLO, WORLD!


// Array Functions:
$myArray = [1, 2, 3, 4, 5];
echo count($myArray); // Output: 5
array_push($myArray, 6);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
$lastElement = array_pop($myArray);
echo $lastElement; // Output: 6


// Math Functions:
$number = -5.75;
echo abs($number); // Output: 5.75

$number = 25;
echo sqrt($number); // Output: 5
echo round(4.5); // Output: 4
echo round(4.6); // Output: 5
echo pow(2, 3); // Output: 8
echo ceil(4.2); // Output: 5
echo floor(4.8); // Output: 4

echo rand(1, 10); // Output: Random number between 1 and 10
echo mt_rand(1, 100); // Output: Random number between 1 and 100


// Date and Time Functions:
echo date('Y-m-d H:i:s'); // Output: Current date and time in 'YYYY-MM-DD HH:MM:SS' format
$timestamp = strtotime('next Sunday');
echo date('Y-m-d', $timestamp); // Output: Next Sunday's date

// File System Functions:
$content = file_get_contents('example.txt');
echo $content;

$data = 'New content';
file_put_contents('example.txt', $data);


// ---------------------------------------------------------------------
// ---------------------------------------------------------------------


// User-Defined Function


// Define Uluk Function
function koko() {
    echo "Hello, welcome!";
}

// Bolu function
koko();

// ---------------------------------------------------------------------

// Define Function ho Parametro
function soma($a, $b) {
    $result = $a + $b;
    return $result;
}

// Bolu Funcao ho nia parametro, ho fo sai nia rejusltadu
$addition_result = soma(5, 3);
echo "Rejultadu husi soma mak: " . $addition_result;

// ---------------------------------------------------------------------

// Funcao ho Default parametro
function halokafe($type = "cappuccino")
{
    return "Halo Kafe ida konaba $type.";
}
echo halokafe(); // Halo Kafe ida konaba cappuccino.
echo halokafe("espresso"); // Halo Kafe ida konaba espresso.
echo halokafe(null); // Halo Kafe ida konaba .

// ---------------------------------------------------------------------

// TASK CALCULATOR


?>

