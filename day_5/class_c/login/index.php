<?php
// 1. Check uluk se butaun login klik ona kalae?
if( isset($_POST['login']) ){

// 2. Check fali, username no password priense hotu kalae? se lae fo notifikasaun
    if( !empty($_POST['username']) && !empty($_POST['password']) ){

// 3. Check username ho password los hotu kalae? u: admin p: 123
        if( $_POST['username'] == 'admin' && $_POST['password'] == '123'){

// 4. Se los lori ba admin.php, 
            header('Location: admin.php');
            exit;

        } else {
// 5. se sala fo notifikasaun
            echo 'Username ka Password sala hela';
        }
        
    } else {
        echo 'Username ho Password labele mamuk!';
    }
}
?>

<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

    <form action="" method="post">
        <ul>
            <li>
                Username : <input type="text" name="username">
            </li>
            <li>
                Password : <input type="password" name="password">
            </li>
            <li>
                <button type="submit" name="login">Login!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>