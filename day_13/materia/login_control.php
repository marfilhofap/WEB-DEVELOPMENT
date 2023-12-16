<?php
session_start();
include('function.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' && $password != '') {
        header('Location: login.php?err=1');
    } else if ($username != '' && $password == '') {
        header('Location: login.php?err=2');
    } else if ($username == '' && $password == '') {
        header('Location: login.php?err=3');
    } else {
        $check_user = sel_table("v_utilijador WHERE emis='$username' and password='$password'");

        if (count($check_user) > 0) {
            $_SESSION['naran_estudante'] = $check_user[0]['naran_estudante'];
            $_SESSION['emis'] = $username;
            header('Location: index.php');
        } else {
            header('Location: login.php?err=4');
        }
    }
}
