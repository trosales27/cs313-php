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
    //function addSong() {
      //document.getElementById('addSong').style.visibility = visible;

      //document.getElementById('addSong').hidden = false;
    //}

    $(document).ready(function(){
      $("#form_button").click(function(){
        $("#submit_song").toggle();
        });
      });

    </script>
</head>
<body>


<?php include 'top_songs_header.php'; ?>

<h3>Genre's:</h3>
<hr width=60%>
<div class="genre">
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
<button id="form_button">Add Song</button>
<div id="submit_song"> <!--make this invisible later? -->
  <form action="submit_song.php" method="post" id="submit_song">
    <select name="genre">
      <?php
      echo "Genre: ";
      foreach ($db->query('SELECT genre_name FROM genre') as $genre)
      {
        echo "<option value=$genre[genre_name]>$genre[genre_name]</option>";
      }
      echo "</select><br>"
      ?>
      Name: <input type="text" name="song"><br>
      Artist: <input type="text" name="artist"><br>
      Album: <input type="text" name="album"><br>
      Rating: <select name="rating">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
      </select><br>
      <button type="submit">Submit</button>
</form>
</div>
    
</body>
</html>