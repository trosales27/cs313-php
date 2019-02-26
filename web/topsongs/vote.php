<?php
require("dbConnect.php");

var_dump($_POST);

$song = $_POST['song_name'];
$artist = $_POST['artist'];
$rating = (int) $_POST['rating'];
$vote = $_POST['vote'];
$times_voted = (int) $_POST['times_voted'];

$rating = $rating + $vote;
$times_voted = $times_voted + 1;

// var_dump($rating);
// var_dump($times_voted);

$sql = "UPDATE song_info SET times_voted = :times_voted, rating = :rating WHERE song_name = '$song' AND artist = '$artist'";

//var_dump($sql);

$stmt = $db->prepare($sql);
$stmt->bindValue(":times_voted", $times_voted);
$stmt->bindValue(":rating", $rating);
$stmt->execute();

header("Location: {$_SERVER['HTTP_REFERER']}");
die();
?>