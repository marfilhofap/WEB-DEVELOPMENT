<?php
include('dados.php');
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>GET 1</title>
</head>
<body>
    <h1>Exemplu GET 1</h1>


    <ul>
        
        <?php foreach($estudante as $x){?>

            <li>
            <a href="get2.php?naran=<?= $x['naran']?>">
                <?= $x['naran']?>
            </a>
            </li>

        <?php } ?>

    </ul>

</body>
</html>
