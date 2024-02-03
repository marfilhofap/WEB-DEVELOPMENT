<?php
$url = basename($_SERVER['REQUEST_URI']);
?>

<div class="bg-primary p-4 text-light text-center">
    <h1>Sistema Informasaun Eskola SENOFA</h1>
    <p>Bemvindo <?= $_SESSION['naran_estudante'] ?> (<?= $_SESSION['user_level']; ?>)</p>
</div>

<ul class="nav nav-pills m-2">
    <li class="nav-item">
        <a class="nav-link <?= ($url == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($url == 'materia.php') ? 'active' : ''; ?>" href="materia.php">Materia</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($url == 'aula.php') ? 'active' : ''; ?>" href="aula.php">Aula</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($url == 'utilijador.php') ? 'active' : ''; ?>" href="utilijador.php">Utilijador</a>
    </li>
    <li class="nav-item dropdown ms-auto d-flex">
        <a class="nav-link dropdown-toggle <?= $url == 'profile.php' ? 'active' : ''; ?>" data-bs-toggle="dropdown" href="#">
            Profile
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item <?= $url == 'profile.php' ? 'active' : ''; ?>" href="profile.php">My Profile</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        </ul>
    </li>
</ul>

<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>