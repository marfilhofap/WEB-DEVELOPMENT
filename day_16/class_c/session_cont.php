<?php
session_start();
if (!isset($_SESSION['emis'])) {
    header('Location: login.php');
    exit();
}

$admin = $_SESSION['user_level'] == 'admin' ? 'admin' : '';
