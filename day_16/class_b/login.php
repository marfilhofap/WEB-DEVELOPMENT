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
        <h1>SISTEMA INFORMASAUN ESKOLA</h1>
        <p>Sistema hodi jere dadus estudante hotu iha Eskola SENOFA</p>
    </div>

    <div class="container">
        <div class="row justify-content-center text-center m-5">
            <div class="col-md-4 border p-5" style="background-color: aquamarine;">

                <h3>Formulariu Login</h3>
                <hr>

                <form action="login_control.php" method="post">
                    <div class="m-3">
                        <label for="username" class="form-label">Username:</label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="hatama Username">
                    </div>

                    <div class="m-3">
                        <label for="password" class="form-label">Password:</label>
                        <input class="form-control" type="text" name="password" id="password" placeholder="hatama Password">
                    </div>

                    <div>
                        <?php
                        if (isset($_GET['err'])) {
                            $err = $_GET['err'];
                            echo '<i class="text-danger">';

                            switch ($err) {
                                case '1':
                                    echo 'Username mamuk hela';
                                    break;
                                case '2':
                                    echo 'Password mamuk hela';
                                    break;
                                case '3':
                                    echo 'Username ho password mamuk hela';
                                    break;
                                case '4':
                                    echo 'Username ou Password sala hela';
                            }

                            echo '</i>';
                        }
                        ?>

                    </div>

                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" name="login">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <footer class="bg-light pt-2 fixed-bottom">
        <marquee behavior="alternative">
            <p>SENOFA | copyright@<?= date('Y') ?></p>
        </marquee>
    </footer>

</body>

</html>