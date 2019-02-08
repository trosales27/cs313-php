<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>

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

<h2>Top Songs</h2>
<hr><br>
<h3>Genre's:</h3>
<hr width=60%>
<?php
echo "Genre's: <br>";
foreach ($db->query('SELECT genre_name FROM genre') as $row)
{
    echo "<div class=genre>" . $row['genre_name'] . "</div>";
}

?>
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