<?php
include('function.php');

if(isset($_POST['aumenta'])){

    $materia = $_POST['materia'];

    $insert = insert_materia($materia);
}

$no = 1;
$dados = sel_table('t_materia order by materia ASC ');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
<?php if(!isset($_GET['insert'])){?>
    <h1>Dadus Materia</h1>
    <p><a href="index.php">Dadus Estudante</a></p>
    <p><a href="materia.php?insert=true">Insert</a></p>
    
    <table border="1">
        <thead>
            <td>No</td>
            <td>Materia</td>
        </thead>
        <tbody>
            <?php foreach($dados as $a):?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $a['materia']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>

    <?php
    }
    if(isset($_GET['insert']) && $_GET['insert'] == 'true'){
    ?>
        <h1>Insert dadus Estudante</h1>

            <form action="materia.php" method="post">
                <ul>
                    <li>
                        <label for="materia">Materia:</label>
                        <input type="text" name="materia" id="materia" required>
                    </li>
                    <li>
                        <button type="submit" name="aumenta">Gravar</button>
                        <button><a href="materia.php">Kansela</a></button>
                    </li>
                </ul>
            </form>
    <?php
    } 
    ?>


</body>
</html>