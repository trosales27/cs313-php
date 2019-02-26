<?php
session_start();
$song = $_POST["song"];
$artist = $_POST["artist"];

echo "song is $song and artist is $artist";

if ($db->query("SELECT song_name FROM song_info WHERE song_name = $song AND artist = $artist") > 0) {
    echo "It's taken";
}
else {
    echo "It's good!!";
}

// if ($db->query > 0) {
//     echo "greater than 0";
// }
// else {
//     echo " NOt so";
// }

//header("Location: submit_song.php");
?>