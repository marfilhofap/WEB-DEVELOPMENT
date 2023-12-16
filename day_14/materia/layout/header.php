<img src="imagem/header.jpg" alt="" class="img-fluid mx-auto" width="100%">
<div class="container-fluid p-3 sticky-top" style="background-color: aliceblue;">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= !isset($_GET['p']) ? 'active' : ''; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= isset($_GET['p']) && $_GET['p'] == 'estudante' ? 'active' : ''; ?>" href="?p=estudante">Estudante</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= isset($_GET['p']) && $_GET['p'] == 'materia' ? 'active' : ''; ?>" href="?p=materia">Materia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= isset($_GET['p']) && $_GET['p'] == 'aula' ? 'active' : ''; ?>" href="?p=aula">Aula</a>
            </li>
            <li class="nav-item dropdown ms-auto">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?p=profile">Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>