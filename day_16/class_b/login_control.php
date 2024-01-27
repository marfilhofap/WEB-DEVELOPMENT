 <?php
    session_start();
    include('function.php');

    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if (empty($username) && !empty($password)) {
            header('Location: login.php?err=1');
        } else if (!empty($username) && empty($password)) {
            header('Location: login.php?err=2');
        } else if (empty($username) && empty($password)) {
            header('Location: login.php?err=3');
        } else {

            $check_utilijador = select_tabela("v_utilijador WHERE emis='$username' and password='$password'");

            if (count($check_utilijador) > 0) {

                $_SESSION['emis'] = $check_utilijador[0]['emis'];
                $_SESSION['id_estudante'] = $check_utilijador[0]['id_estudante'];

                header('Location: index.php');
            } else {
                header('Location: login.php?err=4');
            }
        }
    } else {
        header('Location: login.php');
    }

    ?>