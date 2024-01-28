<?php
include('session_conf.php');
include('function.php');
$no = 1;
$dados = select_tabela('v_utilijador order by naran_estudante ASC');

if (isset($_POST['insert'])) {

    $id_estudante = $_POST['id_estudante'];
    $password = md5($_POST['password']);
    $user_level = $_POST['user_level'];

    $resultado = insert_utilijador($id_estudante, $password, $user_level);
    header('Location: utilijador.php');
}

if (isset($_POST['edit'])) {

    $id = $_POST['id_utilijador'];
    $id_estudante = $_POST['id_estudante'];
    $password = md5($_POST['password']);
    $user_level = $_POST['user_level'];

    $resultado = edit_utilijador($id, $id_estudante, $password, $user_level);
    header('Location: utilijador.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <?php include('menu.php') ?>

        <?php
        if (!isset($_GET['insert']) && !isset($_GET['edit_dados'])) {

        ?>

            <div class="alert alert-info d-flex m-2">
                <div>
                    <h3>Dadus Utilijador</h3>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-primary" href="utilijador.php?insert=true">Insert</a>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <td>No</td>
                    <td>Naran Utilijador</td>
                    <td>Emis</td>
                    <td>User Level</td>
                    <td>Asaun</td>
                </thead>
                <tbody>
                    <?php foreach ($dados as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a['naran_estudante'] ?></td>
                            <td><?= $a['emis'] ?></td>
                            <td><?= $a['user_level'] ?></td>
                            <td><a class="btn btn-warning" href="utilijador.php?edit_dados=<?= $a['id_utilijador'] ?>">edit</a>
                                <a class="btn btn-danger" href="utilijador.php?delete_dados=<?= $a['id_utilijador'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        <?php
        }

        if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
        ?>

            <div class="alert alert-info d-flex m-2">
                <div>
                    <h3>Insert Dadus Utilijador</h3>
                </div>
            </div>
            <form action="utilijador.php" method="post">

                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="id_estudante" class="form-label">Naran Estudante:</label>
                        <select name="id_estudante" id="id_estudante" class="form-control">
                            <?php
                            $estudante = select_tabela('t_estudante order by naran_estudante');
                            foreach ($estudante as $a) :

                                echo '<option value="' . $a['id_estudante'] . '">' . $a['naran_estudante'] . '</option>';

                            endforeach; ?>


                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="user_level" class="form-label">User Level:</label>
                        <select name="user_level" id="user_level" class="form-control">
                            <option value="user normal">User Normal</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit" name="insert">Save</button>
                        <a class="btn btn-secondary" href="utilijador.php">Kansela</a>
                    </div>
                </div>

            </form>

            <?php
        }
        if (isset($_GET['edit_dados'])) {
            $id = $_GET['edit_dados'];

            $dados = select_tabela("t_utilijador WHERE id_utilijador='$id'");

            foreach ($dados as $a) :
            ?>

                <div class="alert alert-warning d-flex mt-2">
                    <h3>Edit Dados utilijador</h3>
                </div>

                <form action="utilijador.php" method="post">

                    <!-- Hidden -->
                    <input type="text" name="id_utilijador" value="<?= $id; ?>" hidden>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="id_estudante" class="form-label">Naran Estudante:</label>
                            <select name="id_estudante" id="id_estudante" class="form-control">
                                <?php
                                $dados_estudante = select_tabela('t_estudante order by naran_estudante');
                                foreach ($dados_estudante as $loop) :
                                    if ($a['id_estudante'] == $loop['id_estudante']) {
                                        echo '<option selected value="' . $loop['id_estudante'] . '">' . $loop['naran_estudante'] . '</option>';
                                    } else {
                                        echo '<option value="' . $loop['id_estudante'] . '">' . $loop['naran_estudante'] . '</option>';
                                    }
                                endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="password" class="form-label">Password Foun:</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="user_level" class="form-label">User Level:</label>
                            <select name="user_level" id="user_level" class="form-control">
                                <?php if ($a['user_level'] == 'admin') { ?>
                                    <option value="admin" selected>Admin</option>
                                    <option value="user normal">User Normal</option>
                                <?php } else { ?>
                                    <option value="admin">Admin</option>
                                    <option value="user normal" selected>User Normal</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                            <a class="btn btn-secondary" href="utilijador.php">Kansela</a>
                        </div>
                    </div>

                </form>

        <?php
            endforeach;
        } ?>

    </div>

</body>

</html>