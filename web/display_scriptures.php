<?php
require("dbConnect.php");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scripture Display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="music.css">
    <script src="main.js"></script>
</head>
<body>

<?php
foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
{
    $book = $row['book'];
    $chapter = $row['chapter'];
    $verse = $row['verse'];
    $content = $row['content'];

    echo "$book $chapter:$verse --  $content";
} 
?>
    
</body>
</html>