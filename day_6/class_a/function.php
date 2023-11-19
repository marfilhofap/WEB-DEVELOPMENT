<?php 
// Built-in Function

// -- String Functions:
// $dadus_orijinal = "hello, world!";
// echo strlen($dadus_orijinal); // Output: 13
// echo str_replace("World", "PHP", $dadus_orijinal); // Output: Hello, PHP!
// echo strtolower($dadus_orijinal); // Output: hello, world!
// echo strtoupper($dadus_orijinal); // Output: HELLO, WORLD!
// echo ucfirst($dadus_orijinal); // Output: Hello, world!
 

// -- Array Functions:
// $myArray = [1, 2, 3, 4, 5];
// echo count($myArray); // Output: 5
// array_push($myArray, 6);
// print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
// $lastElement = array_pop($myArray);
// echo $lastElement; // Output: 6


// Math Functions:
// $number = -5.75;
// echo abs($number); // Output: 5.75

// $number = 25;
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
// $timestamp = strtotime('next Monday');
// echo date('d-m-Y', $timestamp); // Output: Next Sunday's date

// File System Functions:
// $naran_file = "ezemplu.txt";
// $file = fopen($naran_file, "w"); 
// if($file){

//     fwrite($file, "Hello FDSL");

//     fclose($file);

//     echo "File $naran_file konsege kria";

// } else {
//     echo "File $naran_file lakonsege kria";
// }

$content = file_get_contents('ezemplu.txt');
$a = unserialize($content);

foreach($a as $x){
    echo $x['naran'];
}

// $array_data = [
//     [
//         'naran' => 'Lia',
//         'tinan' => 19,
//         'hela_faatin' => 'Caicoli'
//     ]
//     ];

// $array_ba_string = serialize($array_data);

// // // $data = 'Koko fali';
// $a = file_put_contents('ezemplu.txt', $array_ba_string);


?>