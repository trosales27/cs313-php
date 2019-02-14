<?php
require("dbConnect.php");
// $db = get_db();

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

<form action="insert_scriptures.php" method="post">
Book: <input type='text' name='book' id='book'><br>
Chatpter: <input type='text' name='chapter' id='chapter'><br>
Verse: <input type='text' name='verse' id='verse'><br>
Content: <input type='textarea' name='content' id='content'><br>

<?php
//$topics = $db->preapre("SELECT topic_id, topic_name FROM topic");
//$topics->execute();


foreach ($db->query('SELECT topic_id, topic_name FROM topic') as $row)
{
    $topic_id = $row['topic_id'];
    $topic_name = $row['topic_name'];

    echo "$topic_name<input type='checkbox' name='topic[]' value=$topic_id><br>";
}
echo "<input type='checkbox' name='new_topic' value='$new_topic_id'<br>"; 
?>


<input type='submit'>
</form>
    
</body>
</html>