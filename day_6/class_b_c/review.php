<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<h3>Formulariu Rejistrasaun Estudante :</h3>

<form action="" method="post">

    <label>Naran Kompletu :</label>
    <input type="text" name="naran">
    <br> 

    <label>Sexo :</label>
    <select name="sexo">
        <option value="" selected hidden>hili sexo</option>
        <option value="Mane">Mane</option>
        <option value="Feto">Feto</option>
    </select>
    <br>

    <label>Data Moris :</label>
    <input type="date" name="data_moris">
    <br>

    <label>Hela Fatin :</label>
    <textarea name="hela_fatin" cols="30" rows="2"></textarea>
    <br>

    <button type="submit" name="haruka">Rejistu</button>
    
<!-- Parte Tabela nian -->

<?php if( isset($_POST['haruka']) ) :?>

    <table border="1">

        <thead>
            <th>Naran</th>
            <th>Sexo</th>
            <th>Data Moris</th>
            <th>Hela Fatin</th>
        </thead>
        <tbody>
            <td><?= $_POST['naran']?></td>
            <td><?= $_POST['sexo']?></td>
            <td><?= $_POST['data_moris']?></td>
            <td><?= $_POST['hela_fatin']?></td>
        </tbody>
        
    </table>

<?php endif;?>


</form>
    
</body>
</html>