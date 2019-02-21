<?php
require("dbConnect.php"); 

// $query="UPDATE teach07_user_info SET (username, password) = $num WHERE song_name = $song AND artist = $artist";
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $db->prepare('INSERT INTO teach07_user_info(username, password) VALUES (:username, :password)');
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

$stmt->execute();

header("Location: team07_login.php");
?>