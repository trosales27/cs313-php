<?php

print_r($_POST);

$song = $_POST['song_name'];
$artist = $_POST['artist'];
$rating = $_POST['rating'];


$query="UPDATE song_info SET (times_voted) = $num WHERE song_name = $song AND artist = $artist";

//A number from 1 to 5 will be selected
//Submit the vote
//times_voted will increment by 1
//The selected number will be added to the rating for that song, then divided by the times_voted * 5, returning the new percentage


//Will need to revamp database one more time before implementing this.


//MAKE THE LIKE THING AN AJAX REQUEST YO
?>