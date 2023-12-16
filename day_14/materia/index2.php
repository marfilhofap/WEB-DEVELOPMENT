<?php
session_start();

if (!isset($_SESSION['emis'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudante</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluit p-5 bg-primary text-white text-center">
        <h1>BEMVINDO <?= $_SESSION['naran_estudante']; ?></h1>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Popper -->
    <script src="bootstrap-5.0.2-dist/js/popper.min.js"></script>

</body>

</html>