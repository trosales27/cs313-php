<?php include 'load_songs.php' ;?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Songs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="music.css" />
    <script>
    function addSong() {
      //document.getElementById('addSong').style.visibility = visible;

      document.getElementById('addSong').hidden = false;
    }
    </script>
</head>
<body>


<?php include 'top_songs_header.php'; ?>

<h3>Genre's:</h3>
<hr width=60%>
<div class='genre'>
<?php
foreach ($db->query('SELECT genre_name, genre_id FROM genre') as $row)
{
  $link = strtolower($row['genre_name']) . ".php";
    echo "<a href=$link><div class='dropdown'>" . "<span>" . $row['genre_name'] . "</span></a>" . "<div class='dropdown-content'>" . 
    "<p>";
    if ($row['genre_id'] == 1) { echo $genres[1]; } 
    elseif ($row['genre_id'] == 2) { echo $genres[2]; }
    elseif ($row['genre_id'] == 3) { echo $genres[3]; }
    
    echo "</p></div></div>";
}

?>
</div>
<hr>
<h4>Add a Song</h4>
<button onclick='addSong()'>Add Song</button>
<div> <!--make this invisible later? -->
  <form>
    <select name='genre'>
      <?php
      foreach ($db->query('SELECT genre_name FROM genre') as $genre)
      {
        echo "<option value=$genre[genre_name]>$genre[genre_name]</option>";
      }
      ?>
      <br>
      Name: <input type='text' name='song_name'><br>
      Artist: <input type='text' name='artist'><br>
      Album: <input type='text' name='album'><br>
</form>
</div>
    
</body>
</html>