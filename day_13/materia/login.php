<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluit p-5 bg-primary text-white text-center">
        <h1>SISTEMA GESTAUN DADUS ESKOLA</h1>
        <p>Sistema nebe halo Jestaun ba dadus Estudante SENOFA!</p>
    </div>

    <div class="container p-5 text-center">
        <form action="login_control.php" method="post">
            <div class="row justify-content-center">
                <div class="col-lg-4 border p-5" style="background-color: #f5f5f0;">
                    <h3>Form Login</h3>
                    <hr>
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="- hatama Username -">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="- hatama Password -">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                    <div class="text-danger pt-3">
                        <?php
                        if (isset($_GET['err'])) {
                            $err = $_GET['err'];
                            switch ($err) {
                                case '1':
                                    echo 'Hatama Username!';
                                    break;
                                case '2':
                                    echo 'Hatama Password!';
                                    break;
                                case '3':
                                    echo 'Hatama Username no Password!';
                                    break;
                                case '4':
                                    echo 'Username ka Password sala hela!';
                                    break;
                                default:
                                    echo '';
                                    break;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- footer.php -->
    <footer class="bg-light text-center py-3 fixed-bottom">
        <marquee behavior="alternative">
            <p class="mb-0">&copy; <?= date("Y"); ?> Naran Sistema. All Rights Reserved.</p>
        </marquee>
    </footer>


    <!-- Bootstrap JavaScript -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Popper -->
    <script src="bootstrap-5.0.2-dist/js/popper.min.js"></script>

</body>

</html>