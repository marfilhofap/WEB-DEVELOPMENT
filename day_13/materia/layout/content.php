<?php

$page = isset($_GET['p']) ? $_GET['p'] : 'index';

switch ($page) {
    case 'index':
        include('content/home.php');
        break;
    case 'estudante':
        include('content/estudante.php');
        break;
    case 'aula':
        include('content/aula.php');
        break;
    case 'materia':
        include('content/materia.php');
        break;
    case 'profile':
        include('content/profile.php');
        break;
    default:
        include('content/home.php');
        break;
}
