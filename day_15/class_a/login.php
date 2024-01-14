<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid bg-primary text-white text-center p-5">
        <h1>SISTEM INFORMASAUN ESKOLA</h1>
        <p>Sistema nebe halo Jestaun ba dadus estudante hotu iha Eskola CANOSSA</p>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-4 border p-4" style="background-color:#ccccff;">
                <h3>Formulariu Login</h3>
                <hr>

                <form action="login_control.php" method="post">

                    <div class="mt-4">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Hatama username">
                    </div>

                    <div class="mt-4">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Hatama password">
                    </div>

                    <div>
                        <?php
                        if (isset($_GET['err'])) {
                            $err = $_GET['err'];
                            echo '<i class="text-danger">';

                            switch ($err) {
                                case '1':
                                    echo 'Tenki prense username';
                                    break;
                                case '2':
                                    echo 'Tenki prense password';
                                    break;
                                case '3':
                                    echo 'Username ho Password labele mamuk';
                                    break;
                                case '4':
                                    echo 'Username ou Password Sala';
                                    break;
                            }
                            echo '</i>';
                        }
                        ?>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary" type="submit" name="login">Login</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <footer class="text-center p-2 fixed-bottom" style="background-color: #cce0ff;">
        <marquee behavior="alternative">
            <p class="mb-0">&copy; <?= date("Y"); ?> CANOSSA. All Rights Reserved.</p>
        </marquee>
    </footer>







</body>

</html>