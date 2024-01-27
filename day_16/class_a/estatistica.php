<?php
include('session_conf.php');
include('function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>

    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <?php include('menu.php') ?>

        <div class="alert alert-info d-flex m-2">
            <div>
                <h3>Estatistica Estudante</h3>
            </div>

        </div>


        <div class="row">
            <div class="col-md-3">
                <table class="table table-hover">
                    <thead>
                        <td>Sexo</td>
                        <td>Total</td>
                    </thead>
                    <tbody>
                        <?php
                        $dados_sexo = table('SELECT sexo, count(sexo) as total FROM t_estudante group by sexo');
                        foreach ($dados_sexo as $a) : ?>
                            <tr>
                                <td><?= $a['sexo'] ?></td>
                                <td><?= $a['total'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>


</body>

</html>