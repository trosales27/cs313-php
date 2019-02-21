<?php
//METAL
?>
<?php include 'load_songs.php' ;?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Metal Songs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="music.css">
    <script src="main.js"></script>
</head>
<body>

<?php include 'top_songs_header.php'; ?>
<h2>Top Rock Songs:</h2>
<table>
<th>Name</th><th>Artist</th><th>Album</th><th>Rating</th>
<?php
foreach ($db->query("SELECT song_name, album, artist, rating FROM song_info WHERE genre = 'Metal'") as $song)
{
    $song1 = $song['song_name'];
    echo "<form action='like.php' method='post'>";
    echo "<input type='hidden' name='song_name' value='$song[song_name]'>";
    echo "<input type='hidden' name='artist' value='$song[artist]'>";
    echo "<input type='hidden' name='rating' value='$song[rating]'>";
    echo "<tr><td>" . $song['song_name'] . "</td><td>" . $song['artist'] . "</td><td>" . $song['album']
    . "</td><td>" . $song['rating'] . "</td><td><button type='submit'>Like</button></form>";
    echo "<form action='dislike.php' method='post'>";
    echo "<input type='hidden' name='song_name' value='$song[song_name]'>";
    echo "<input type='hidden' name='artist' value='$song[artist]'>";
    echo "<input type='hidden' name='rating' value='$song[rating]'>";
    echo "<button type='submit'>Dislike</button></form></td></tr>";
}
?>
</table>

</body>
</html>