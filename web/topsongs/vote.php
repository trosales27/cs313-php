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

$sql = "UPDATE song_info SET :times_voted, :rating = times_voted, :rating WHERE song_name = '$song' AND artist = '$artist'";


$stmt = $db->prepare($sql);
$stmt->bindValue(':times_voted', $times_voted);
$stmt->bindValue(':rating', $rating);
$stmt->execute();

//$query="UPDATE song_info SET (times_voted, rating) = ($times_voted, $rating) WHERE song_name = $song AND artist = $artist";

//$statement = $db->prepare($query);
//$statement->execute();

// need to get this pushed to database

//MAKE THE LIKE THING AN AJAX REQUEST YO
?>