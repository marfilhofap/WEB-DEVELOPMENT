<?php
// Built-in Function

// String Functions:
$originalString = "hello, world!";
// echo strlen($originalString); // Output: 13
// echo str_replace("World", "PHP", $originalString); // Output: Hello, PHP!
// echo strtolower($originalString); // Output: hello, world!
// echo strtoupper($originalString); // Output: HELLO, WORLD!
// echo ucfirst($originalString);


// Math Functions:
// $number = -5.75;
// echo abs($number); // Output: 5.75

$number = 25;
// echo sqrt($number); // Output: 5
// echo round(4.5); // Output: 4
// echo round(4.6); // Output: 5
// echo pow(2, 3); // Output: 8
// echo ceil(4.2); // Output: 5
// echo floor(4.8); // Output: 4

// echo rand(1, 10); // Output: Random number between 1 and 10
// echo mt_rand(1, 100); // Output: Random number between 1 and 100

// Date and Time Functions:
// echo date('d-m-Y'); // Output: Current date and time in 'YYYY-MM-DD HH:MM:SS' format
// $timestamp = strtotime('next Sunday');
// echo date('Y-m-d', $timestamp); // Output: Next Sunday's date

// File System Functions:
$file_nia_naran = 'file_koko.txt';
$kria_file = fopen($file_nia_naran, 'w'); // Hodi kria File

$dados = 'Diak kalae Bro';
file_put_contents($file_nia_naran, $dados); // Hodi tau dadus

$content = file_get_contents($file_nia_naran); // hodi lee dadus
echo $content;


?>