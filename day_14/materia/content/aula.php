<?php
if (isset($_GET['id_materia'])) {
    $id_materia = $_GET['id_materia'];
    $dados = sel_table("v_aula where id_materia='$id_materia'");
} else if (isset($_GET['id_estudante'])) {
    $id_estudante = $_GET['id_estudante'];
    $dados = sel_table("v_aula where id_estudante='$id_estudante'");
} else {
    $dados = sel_table("v_aula");
}
?>

<div class="alert alert-success d-flex justify-content-center align-items-center">
    <div>
        <h3>Aula</h3>
    </div>
    <div class="ms-auto">
        <p><a class="btn btn-primary">Insert</a></p>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <td>No</td>
            <td>Naran</td>
            <td>Sexo</td>
            <td>Materia</td>
            <td>Asaun</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($dados as $a) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $a['naran_estudante']; ?></td>
                <td><?= $a['sexo']; ?></td>
                <td><?= $a['materia']; ?></td>
                <td>
                    <a class="btn btn-warning" href="aula.php?edit=<?= $a['id_aula']; ?>">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>