<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>INSERT</h1>

    <form action="post">
        <ul>
            <li>
                <label for="naran_estudante">Naran Estudante</label>
                <input type="text" name="naran_estudante" id="naran_estudante">
            </li>
            <li>
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo">
                    <option value=""></option>
                </select>
            </li>
            <li>
                <label for="data_moris">Data Moris</label>
                <input type="date" name="data_moris" id="data_moris">
            </li>
        </ul>
    </form>
</body>
</html>