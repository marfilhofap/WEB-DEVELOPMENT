<?php
session_start();

if (!isset($_SESSION['emis'])) {
    header('Location: login.php');
    exit;
}
