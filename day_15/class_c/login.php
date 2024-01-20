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
        <p>Sistema informasaun konaba dadus estudante husi eskola SENOFA</p>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 border p-5 text-center">

                <h3>Form Login</h3>
                <hr>

                <form action="login_control.php" method="post">

                    <div class="mt-3">
                        <label for="username" class="form-label">Username:</label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="hatama username">
                    </div>

                    <div class="mt-3">
                        <label for="password" class="form-label">Password:</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="hatama password">
                    </div>

                    <div>

                        <?php
                        if (isset($_GET['err'])) {
                            $err = $_GET['err'];
                            echo '<i class="text-danger">';

                            switch ($err) {
                                case '1':
                                    echo 'Username ho Password Mamuk hela';
                                    break;
                                case '2':
                                    echo 'Username mamuk hela';
                                    break;
                                case '3':
                                    echo 'Password mamuk hela';
                                    break;
                                case '4':
                                    echo 'Username ka Password sala hela';
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

    <footer class="p-2 fixed-bottom" style="background-color: #cce0ff;">
        <marquee behavior="alternative">
            <p>SENOFA | copyright@<?= date('Y'); ?></p>
        </marquee>
    </footer>


</body>

</html>