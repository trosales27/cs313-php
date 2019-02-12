<?php
require("dbConnect.php");
$db = get_db();

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
$topics = $db->preapre("SELECT topic_id, topic_name FROM topic");
$topics->execute();

while ($row = $topics->fetch(PDO::FETCH_ASSOC))
{
    $topic_id = $row['topic_id'];
    $topic_name = $row['topic_name'];

    echo "<input type=\'checkbox\' name='topic[]' value=$topic_id>$topic_name<br>";
} 
?>

<input type='submit'>
</form>
    
</body>
</html>