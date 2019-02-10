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


$genres = array();
$id = 1;
// foreach ($db->query('SELECT song_name, album, artist, rating FROM song_info WHERE genre = $row[$id]') as $song)
//     {
//       echo $song['song_name'];
//       $id += 1;
//       if ($id > 3) { break; }
//     }
// $genres = array();
//  foreach ($db->query('SELECT genre_name FROM genre') as $row)  
//  {
//      array_push($genres, $row['genre_name']);
//    //echo "Row is: " . $row['genre_name'] . '<br>';
//   }

// foreach($db->query('SELECT song_name FROM song_info WHERE genre = 'rock') as $song) {
//   echo "song is: " . $song['song_name'] . '<br>';
// }


?>
