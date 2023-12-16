<?php 
include('koneksaun.php');
$kon = koneksaun();

function select_table($naran_table){
        global $kon;

        $sql = "SELECT * FROM $naran_table";
        $stmt = $kon->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $resultado;
}
?>