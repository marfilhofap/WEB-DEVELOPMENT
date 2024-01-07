<?php
$no = 1;
$dados = sel_table('t_materia order by materia ASC ');
?>

<div class="alert alert-success d-flex justify-content-center align-items-center">
    <div>
        <h3>Materia</h3>
    </div>
    <div class="ms-auto">
        <p><a class="btn btn-primary">Insert</a></p>
    </div>
</div>

<div>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>No</td>
                <td>Materia</td>
                <td>Asaun</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $a) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><a style="text-decoration: none;" href="?p=aula&id_materia=<?= $a['id_materia'] ?>">
                            <?= $a['materia'] ?>
                        </a>
                    </td>
                    <td><a class="btn btn-warning" href="materia.php?edit_dados=<?= $a['id_materia'] ?>">Edit</a>
                        <a class="btn btn-danger" href="materia.php?delete=<?= $a['id_materia'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>