<?php

print_r($_POST);

$song = $_POST['song_name'];
$artist = $_POST['artist'];
$rating = $_POST['rating'];

$query="UPDATE song_info SET (times_voted) = $num WHERE song_name = $song AND artist = $artist";

// This page will take the selected song and increase the number of votes by one
// This wil update the songs average popularity score
// For simplicity sake, the voting for songs will just be voted up or down, then comptue a weighted score based on number of 
// likes and dislikes.
?>