<?php
require("dbConnect.php");

print_r($_POST);

$song = $_POST['song_name'];
$artist = $_POST['artist'];
$rating = (int) $_POST['rating'];
$vote = $_POST['vote'];
$times_voted = (int) $_POST['times_voted'];

$rating = $rating + $vote;
$times_voted = $times_voted + 1;


$stmt = $db->prepare("UPDATE song_info(times_voted, rating) VALUES (:times_voted, :rating) WHERE song_name = $song AND artist = $artist");
$stmt->bindValue(':times_voted', $times_voted, PDO::PARAM_INT);
$stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
$stmt->execute();

//$query="UPDATE song_info SET (times_voted, rating) = ($times_voted, $rating) WHERE song_name = $song AND artist = $artist";

//$statement = $db->prepare($query);
//$statement->execute();

// need to get this pushed to database

//MAKE THE LIKE THING AN AJAX REQUEST YO
?>