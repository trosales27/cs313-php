<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Team 07</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css">
</head>
<body>
<h2>Login page</h2>
<form action='login.php' method='post'>
    Username: <input type='text' name='username'>
    Password: <input type='password' name='password'>
    <button type='submit'>Login</button>
</form>

<p>Don't have an account? Create one <a href='team07_sign_up.php'>here.</a></p>
</body>
</html>