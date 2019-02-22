<?php

print_r($_POST);

$song = $_POST['song_name'];
$artist = $_POST['artist'];
$rating = $_POST['rating'];
$vote = $_POST['vote'];

$rating = $rating + $vote;
$times_voted = $times_voted + 1;


$stmt = $db->prepare('UPDATE song_info(times_voted, rating) SET (:times_voted, :rating)');
$stmt->bindValue(':times_voted', $tiems_voted, PDO::PARAM_INT);
$stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
$stmt->execute();

//$query="UPDATE song_info SET (times_voted, rating) = ($times_voted, $rating) WHERE song_name = $song AND artist = $artist";

//$statement = $db->prepare($query);
//$statement->execute();

// need to get this pushed to database

//MAKE THE LIKE THING AN AJAX REQUEST YO
?>