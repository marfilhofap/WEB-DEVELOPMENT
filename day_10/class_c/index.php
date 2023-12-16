<?php
include('function.php');

if(isset($_POST['aumenta'])){

    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $insert = insert_estudante($naran_estudante, $sexo, $data_moris);
}

$no = 1;
$dados = sel_table('t_estudante order by naran_estudante ASC ');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
    <?php if(!isset($_GET['insert'])){?>
    <h1>Dadus Estudante</h1>
    <p><a href="materia.php">Dadus Materia</a></p>
    <p><a href="index.php?insert=true">Insert</a></p>
    
    <table border="1">
        <thead>
            <td>No</td>
            <td>Naran Estudante</td>
            <td>Sexo</td>
            <td>Data Moris</td>
            <td>Asaun</td>
        </thead>
        <tbody>
            <?php foreach($dados as $a):?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $a['naran_estudante']?></td>
                <td><?= $a['sexo']?></td>
                <td><?= $a['data_moris']?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hamos</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>

    <?php
    }
    if(isset($_GET['insert']) && $_GET['insert'] == 'true'){
    ?>
        <h1>Insert dadus Estudante</h1>

            <form action="index.php" method="post">
                <ul>
                    <li>
                        <label for="naran_estudante">Naran Estudante:</label>
                        <input type="text" name="naran_estudante" id="naran_estudante" required>
                    </li>
                    <li>
                        <label for="naran_estudante">Sexo:</label>
                        <select name="sexo" id="sexo">
                            <option value="" selected hidden>- Hili Sexo -</option>
                            <option value="M">Mane</option>
                            <option value="F">Feto</option>
                        </select>
                    </li>
                    <li>
                        <label for="data_moris">Data Moris:</label>
                        <input type="date" name="data_moris" id="data_moris" required>
                    </li>
                    <li>
                        <button type="submit" name="aumenta">Gravar</button>
                        <button><a href="index.php">Kansela</a></button>
                    </li>
                </ul>
            </form>
    <?php
    } 
    ?>

</body>
</html>