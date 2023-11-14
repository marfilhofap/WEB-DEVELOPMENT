<?php

if( !isset($_GET['naran']) ){
    header("Location: aprende1.php");
}

?>

<!DOCTYPE html>
<head>
    <title>Aprende GET</title>
</head>
<body>
    <h1>
        Check Tinan <?= $_GET['naran']?>
    </h1>

    <a href="aprende1.php">Back</a>
</body>
</html>