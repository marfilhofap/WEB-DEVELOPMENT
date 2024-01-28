<?php
$url = basename($_SERVER['REQUEST_URI']);
?>

<h1 class="bg-primary p-5 text-center text-white">Sistema Informasaun Akademika CANOSSA</h1>

<ul class="nav nav-pills m-2">
    <li class="nav-item">
        <a href="index.php" class="nav-link <?= $url == 'index.php' ? 'active' : ''; ?>">Home</a>
    </li>
    <li class="nav-item">
        <a href="materia.php" class="nav-link <?= $url == 'materia.php' ? 'active' : ''; ?>">Materia</a>
    </li>
    <li class="nav-item">
        <a href="utilijador.php" class="nav-link <?= $url == 'utilijador.php' ? 'active' : ''; ?>">Utilijador</a>
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

<!-- Bootstrap JavaScript -->
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>