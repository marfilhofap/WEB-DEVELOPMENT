<?php 
include('koneksaun.php');
$kon = koneksaun();

function sel_table($naran_table){
    global $kon;
    $sql = "SELECT * FROM $naran_table";
    $dados = $kon->prepare($sql);
    $dados->execute();
    return $dados->fetchAll(PDO::FETCH_ASSOC);
}

function insert_estudante($naran_estudante, $sexo, $data_moris){
    global $kon;
    $sql = "INSERT INTO t_estudante(naran_estudante, sexo, data_moris) 
            VALUES('$naran_estudante', '$sexo', '$data_moris')";
    $dados = $kon->prepare($sql);
    $dados->execute();
    
}

function insert_materia($materia){
    global $kon;
    $sql = "INSERT INTO t_materia(materia) 
            VALUES('$materia')";
    $dados = $kon->prepare($sql);
    $dados->execute();
    
}
?>