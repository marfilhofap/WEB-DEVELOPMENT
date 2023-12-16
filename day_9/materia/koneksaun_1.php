<?php 

// Parametro sira hodi halo Koneksaun ba database PostgreSQL
$dsn = 'pgsql:host=localhost;dbname=db_web_development';
$username = 'postgres';
$password = 'admin';

try {
    // Kria instansia PDO (PHP Data Objects) ba PostgreSQL
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO error mode ba exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo 'Koneksaun Susesu';

    // Query
    $sql = "SELECT * FROM t_estudante";

    // Prepara no Exekuta Query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch nia Rejultadu sai associative array
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultado as $loop){
        echo 'Naran : '.$loop['naran_estudante'].'<br>';
    }
    

} catch (PDOException $e) {
    // Handle database connection errors
    echo 'Koneksaun Error: ' . $e->getMessage();
}


?>