<?php
$no = 1;
$dados = sel_table('t_estudante order by naran_estudante ASC ');
?>
<?php if (!isset($_GET['insert_estudante']) && !isset($_GET['edit_estudante'])) { ?>

    <div class="alert alert-success d-flex justify-content-center align-items-center">
        <div>
            <h3>Estudante</h3>
        </div>
        <div class="ms-auto">
            <p><a href="?p=estudante&insert_estudante=true" class="btn btn-primary">Insert</a></p>
        </div>
    </div>

    <div>
        <table id="dt_estudante" class="table table-hover">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Naran Estudante</td>
                    <td>Sexo</td>
                    <td>Data Moris</td>
                    <td>Asaun</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $a) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><a style="text-decoration: none;" href="?p=aula&id_estudante=<?= $a['id_estudante'] ?>">
                                <?= $a['naran_estudante'] ?>
                            </a>
                        </td>
                        <td><?= $a['sexo'] ?></td>
                        <td><?= $a['data_moris'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="?p=estudante&edit_estudante=<?= $a['id_estudante'] ?>">Edit</a>
                            <a class="btn btn-danger" href="index.php?delete=<?= $a['id_estudante']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div>
    <?php }
if (isset($_GET['insert_estudante']) && $_GET['insert_estudante'] == 'true') {
    ?>

        <div class="alert alert-success text-center">
            <div>
                <h3>Insert dadus Estudante</h3>
            </div>
        </div>

        <form action="model/controlo.php" method="post">

            <div class="row justify-content-center">
                <div class="col-md-8 p-3">
                    <input type="text" class="form-control" name="naran_estudante" id="naran_estudante" placeholder="- hatama Naran -" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 p-3">
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="" selected hidden>- hili sexo -</option>
                        <option value="M">Mane</option>
                        <option value="F">Feto</option>
                    </select>
                </div>
                <div class="col-md-4 p-3">
                    <input type="date" name="data_moris" id="data_moris" class="form-control" required>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-lg-2">
                    <button class="btn btn-primary" type="submit" name="insert_estudante">Save</button>
                    <a class="btn btn-danger" href="?index.php&p=estudante">Kansela</a></button>
                </div>
            </div>

        </form>

        <?php
    }
    if (isset($_GET['edit_estudante']) && !empty($_GET['edit_estudante'])) {
        $id = $_GET['edit_estudante'];
        $dados_edit = sel_table("t_estudante where id_estudante='$id'");

        foreach ($dados_edit as $a) :
        ?>

            <div class="alert alert-success text-center">
                <div>
                    <h3>Edit dadus Estudante</h3>
                </div>
            </div>

            <form action="index.php" method="post">

                <div class="row justify-content-center">
                    <div class="col-md-8 p-3">
                        <input type="text" value="<?= $id ?>" name="id" class="form-control" hidden>
                        <input type="text" name="naran_estudante" class="form-control" id="naran_estudante" value="<?= $a['naran_estudante'] ?>" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4 p-3">
                        <select name="sexo" id="sexo" class="form-control">
                            <?php
                            if ($a['sexo'] == 'M') {
                                echo '<option value="M" selected>Mane</option>
                                <option value="F">Feto</option>';
                            } else if ($a['sexo'] == 'F') {
                                echo '<option value="M">Mane</option>
                                <option value="F" selected>Feto</option>';
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-md-4 p-3">
                        <input type="date" name="data_moris" class="form-control" id="data_moris" value="<?= $a['data_moris'] ?>" required>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-3">
                        <button class="btn btn-primary" type="submit" name="edit_estudante">Save</button>
                        <a class="btn btn-danger" href="?p=estudante">Kansela</a>
                    </div>
                </div>

            </form>
    <?php
        endforeach;
    }
    ?>
    </div>