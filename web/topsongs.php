<?php include 'load_songs.php' ;?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Songs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="music.css" />
    <script src="main.js"></script>
</head>
<body>


<?php include 'top_songs_header.php'; ?>

<h3>Genre's:</h3>
<hr width=60%>
<div class='genre'>
<?php
foreach ($db->query('SELECT genre_name FROM genre') as $row)
{
    echo "<div class='dropdown'>" . "<span>" . $row['genre_name'] . "</span>" . "<div class='dropdown-content'>" . 
    "<p>";
    foreach ($db->query('SELECT song_name, album, artist, rating FROM song_info WHERE genre = $row["genre_id"]') as $song)
    {
      echo $song['song_name'];
    }
    
    echo "</p></div></div>";
}

// foreach ($db->query('SELECT song_name, album, artist, rating FROM song_info WHERE genre = $row[genre_id]') as $song)
//     {
//       echo $song['song_name'] . ' ' . $song['album'] .  ':' . $song['artist'] . 
//       ' - ' . $song['rating'] . '<br>';
//     } 
?>
</div>
<hr>
<?php
foreach ($db->query('SELECT song_name, album, artist, rating FROM song_info') as $row)
{
  echo $row['song_name'] . ' ' . $row['album'] .  ':' . $row['artist'] . 
  ' - ' . $row['rating'] . '<br>';
}

?>
    
</body>
</html>