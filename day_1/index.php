<?php 

// echo 'Ola Mundo';


// 1. Comment



// 2. Variavel

$nome = 'Andre da Costa, ';
$nome .= 'Maria da Costa';

// echo $nome;

// 3. Concatenate

// echo 'Hau nia naran: '.$nome.'<br>';


// 4. Data Type

// $hela_fatin = ['Marfilho','Fidel','Alvares'];

// $ex_ar = array("Marfilho","Fidel","Alvares");

// - String
// - Integer
// - Float (double)
// - Array
// - Boolen
// - NULL
// - Object
// - Resource


// echo gettype($ex_ar);

// var_dump($ex_ar);

// echo $ex_ar[2];



// Boolean
$tinan = 17;


if($tinan > 16){
    $a = 'Tuan ona';
} else {
    $a = 'Nurak hela';
}


// echo $a;


// NULL
$naran = 'Miguel';

$naran = NULL;

// echo $naran;


// Resource :

$koko = fopen("koko.txt", "r");

if ($koko == false){
    echo 'Labele Asesu';
} else {

    // echo 'Bele Asesu,';

    while (!feof($koko)){
        $loke = fgets($koko);

        // echo $loke;
    }

}


// Object 
class identidade{
    public $naran;
    public $tinan;

    public function dados(){
        return "Ola, Hau nia naran: $this->naran, no agora tinan $this->tinan";
    }
}


$bolu = new identidade();
$bolu->naran = "Marfilho";
$bolu->tinan = 26;

echo $bolu->dados();



// 1. Tenki Instala hotu ona Aplikasaun Nesesariu sira
// 2. Tenki iha ona Account Gitlab


?>