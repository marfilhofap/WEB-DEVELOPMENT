<?php
$error = 0;
// Check uluk butaun login klik ona kalae
if( isset($_POST['login']) ){

// Check Username no Password priense hotu kalae
    if( !empty($_POST['username']) && !empty($_POST['password']) ){

// Check Username ho Password los hotu kalae : 
// Se username ho password los hotu, bele loke file admin
        if($_POST['username'] == 'Admin' && $_POST['password'] == '123'){
            header('Location: post2.php');
            exit;

// Se username ka password sala, entaun fo sai notifikasaun dehan sala
        } else {
            $error = 2;
        }

    } else {
        $error = 1;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende POST</title>
</head>
<body>

<h1>Login Admin</h1>

<?php 
if( $error == 1){
    echo "<p>Username / Password tenki priense hotu</p>";
} else if( $error == 2){
    echo "<p>Username / Password sala</p>";
}
?>

    <form action="" method="post">
        <ul>

            <li>Username : <input type="text" name="username"> </li>
            <li>Password : <input type="password" name="password"> </li>

            <li><button type="submit" name="login">Login</button></li>

        </ul>
    </form>

</body>
</html>