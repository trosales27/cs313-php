<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css">
</head>
<body>
<h2>Create an Account</h2>
<form action='insert_db.php' method='post'>
    Enter username: <input type='text' name='username'>
    Enter Password: <input type='password' name='password'>
    <button type='submit'>Submit</button>
</form>
    
</body>
</html>
