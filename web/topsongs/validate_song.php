<?php
session_start();
$song = $_POST["song"];
$artist = $_POST["artist"];

echo "song is $song and artist is $artist";

if ($db->query("SELECT song_name FROM song_info WHERE song_name = $song AND artist = $artist") == NULL) {
    echo "It's good!!";
}

else {
    echo "taken!!";
}

// if ($db->query > 0) {
//     echo "greater than 0";
// }
// else {
//     echo " NOt so";
// }

//header("Location: submit_song.php");
?>