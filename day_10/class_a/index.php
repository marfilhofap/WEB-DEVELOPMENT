<?php
include('function.php');

if(isset($_POST['submit'])){

    $naran_estudante = $_POST['naran_estudante'];
    $sexo = $_POST['sexo'];
    $data_moris = $_POST['data_moris'];

    $rejultado = insert_estudante($naran_estudante, $sexo, $data_moris);

}

$dados = select_table('t_estudante order by naran_estudante ASC');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>

<?php if(!isset($_GET['insert'])){?>

    <ul>
        <li>
            <h1>Lista Estudante</h1>
        </li>
        <li>
            <h3><a href="materia.php">Lista Materia</a></h3>
        </li>
        <li>
            <h3><a href="index.php?insert=true">INSERT</a></h3>
        </li>
    </ul>

        <table border="1">
            <thead>
                <td>No</td>
                <td>Naran</td>
                <th>Sexo</th>
                <th>Data Moris</th>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach($dados as $a):
                ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $a['naran_estudante']?></td>
                        <td><?= $a['sexo'] == 'M' ? 'Mane' : 'Feto'?></td>
                        <td><?= $a['data_moris']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php }
    if(isset($_GET['insert']) && $_GET['insert'] == 'true'){
    ?>

    <h1>Insert dados Estudante</h1>

        <form action="index.php" method="post">
            <ul>
                <li>
                    <label for="naran_estudante">Naran Estudante : </label>
                    <input type="text" name="naran_estudante" id="naran_estudante" required>
                </li>
                <li>
                    <label for="sexo">Sexo : </label>
                    <select name="sexo" id="sexo">
                        <option value="" selected hidden>- hili sexo -</option>
                        <option value="M">Mane</option>
                        <option value="F">Feto</option>
                    </select>
                </li>
                <li>
                    <label for="data_moris">Data Moris : </label>
                    <input type="date" name="data_moris" id="data_moris" required>
                </li>
                <li>
                    <button type="submit" name="submit">Save</button>
                    <button><a href="index.php">Kansela</a></button>
                </li>
            </ul>

        </form>
    
    <?php 
    }
    ?>
    
</body>
</html>