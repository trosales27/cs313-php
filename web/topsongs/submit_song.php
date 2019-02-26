<?php include 'load_songs.php' ;

print_r($_POST);

$song = htmlspecialchars($_POST['song']);
$album = htmlspecialchars($_POST['album']);
$artist = htmlspecialchars($_POST['artist']);
$rating =  $_POST['rating'];
$genre = $_POST['genre'];
$times_voted = 1;

$num = "SELECT times_voted FROM song_info WHERE song_name = $song AND artist = '$artist'";
//echo "Num is: $num";
//$num  = $num + 1;
$query="UPDATE song_info SET (times_voted) = $num WHERE song_name = $song AND artist = $artist";

$stmt = $db->prepare('INSERT INTO song_info(song_name, album, artist, rating, genre, times_voted) 
VALUES (:song, :album, :artist, :rating, :genre, :times_voted)');
$stmt->bindValue(':song', $song, PDO::PARAM_STR);
$stmt->bindValue(':album', $album, PDO::PARAM_STR);
$stmt->bindValue(':artist', $artist, PDO::PARAM_STR);
$stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmt->bindValue(':times_voted', $times_voted, PDO::PARAM_INT);
$stmt->execute();

$url = strtolower($genre) . ".php";
header("Location: $url");

?>