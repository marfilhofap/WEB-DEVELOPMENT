<?php
$url = basename($_SERVER['REQUEST_URI']);
?>

<ul class="nav nav-pills m-2">
    <li class="nav-item">
        <a class="nav-link <?= $url == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= $url == 'materia.php' ? 'active' : ''; ?>" href="materia.php">Materia</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= $url == 'aula.php' ? 'active' : ''; ?>" href="aula.php">Aula</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= $url == 'utilijador.php' ? 'active' : ''; ?>" href="utilijador.php">Utilijador</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= $url == 'profile.php' ? 'active' : ''; ?>" href="profile.php">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link bg-danger text-white" href="logout.php">Logout</a>
    </li>
</ul>