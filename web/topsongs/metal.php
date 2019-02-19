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
<th>Name</th><th>Artist</th><th>Album</th><th>rating</th>
<?php
foreach ($db->query("SELECT song_name, album, artist, rating FROM song_info WHERE genre = 'Metal'") as $song)
{
    echo "<tr><td>" . $song['song_name'] . "</td><td>" . $song['artist'] . "</td><td>" . $song['album']
    . "</td><td>" . $song['rating'] . "</td><td><a href='vote.php'><button>Like this Song</button></a></td></tr>";
}
?>
</table>

</body>
</html>