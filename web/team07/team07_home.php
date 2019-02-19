<?php
session_start();

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
}
else
{
    header("Location: \team07\login.php");
    die();
}
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
<h2>Home page</h2>
<p>Your Username is: <?php $username?>
<a href='logout.php'>Log Out</a>


</body>
</html>