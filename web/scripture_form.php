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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scripture Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="music.css">
    <script src="main.js"></script>
</head>
<body>
<h2>Scriptures!</h2>

<form action=post>
<input type='text' name='book'>
<input type='text' name='chapter'>
<input type='text' name='verse'>
<input type='textarea' name='content'>

<?php
$topics = $db->preapre("SELECT topic_name FROM topic");
$topics->execute();

while ($topic = $topics->fetch(PDO::FETCH_ASSOC))
{
    echo "<input type='checkbox name=$topic value=$topic<br>";
} 
?>

<input type='submit'>
</form>
    
</body>
</html>