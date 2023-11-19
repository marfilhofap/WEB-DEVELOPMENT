<?php
// 1. Butaun login klik ona kalae?
if( isset($_POST['submit']) ){

// 2. username no password priense hotu ona kalae?
    if( !empty($_POST['username']) && !empty($_POST['password']) ){

// 3. Check username no password
        if( $_POST['username'] == 'admin' && $_POST['password'] == '123'){

// 4. Se los lorin ba review2.php
            header('Location: review2.php');
            exit;

// 5. se sala fo notifikasaun dehan sala
        } else {
            echo 'Username no Password sala hela';
        }

    } else {
        echo 'Username no password labele mamuk';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET</title>
</head>
<body>

<h1>User login</h1>

<form action="" method="post">

    <label for="username">Username :</label>
    <input type="text" name="username" id="username" placeholder="Ense Username">

    <br>

    <label for="password">Password :</label>
    <input type="password" name="password" id="password" placeholder="Ense Password">

    <br>

    <button type="submit" name="submit">Login</button>

</form>
    
</body>
</html>