<?php
include('function.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if (empty($username) && empty($password)) {
        header('Location: login.php?err=1');
    } else if (empty($username) && !empty($password)) {
        header('Location: login.php?err=2');
    } else if (!empty($username) && empty($password)) {
        header('Location: login.php?err=3');
    } else {

        $check_utilijador = sel_table("v_utilijador where emis = '$username' and password = '$password'");

        if (count($check_utilijador) > 0) {
            session_start();
            $_SESSION['emis'] = $check_utilijador[0]['emis'];
            $_SESSION['naran_estudante'] = $check_utilijador[0]['naran_estudante'];
            $_SESSION['user_level'] = 'user_normal';

            header('Location: index.php');
        } else {
            header('Location: login.php?err=4');
        }
    }
} else {
    header('Location: login.php');
}