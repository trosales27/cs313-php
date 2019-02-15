<?php include 'load_songs.php' ;

$song = htmlspecialchars($_POST['song']);
$album = htmlspecialchars($_POST['album']);
$artist = htmlspecialchars($_POST['artist']);
$album = htmlspecialchars($_POST['genre']);

$stmt = $db->prepare('INSERT INTO song_info(song_name, album, artist, rating, genre) VALUES (:song, :album, :artist, :rating, :genre)'); /*Insert ia new topic into the topci table here*/
$stmt->bindValue(':song', $song, PDO::PARAM_STR);
$stmt->bindValue(':album', $album, PDO::PARAM_STR);
$stmt->bindValue(':artist', $artist, PDO::PARAM_STR);
$stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmt->execute();

?>