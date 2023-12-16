<?php
session_start();

if (!isset($_SESSION['emis'])) {
    header('Location: login.php');
    exit;
}

include('function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/brands.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/solid.css">
</head>

<body>

    <?php include('layout/header.php') ?>

    <div class="container p-2">

        <?php include('layout/content.php') ?>

    </div>

    <?php include('layout/footer.php') ?>

    <!-- Bootstrap JavaScript -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Popper -->
    <script src="bootstrap-5.0.2-dist/js/popper.min.js"></script>

</body>

</html>