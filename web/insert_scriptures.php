<?php
require("dbConnect.php");
 
$book = $_POST('book');
$chapter = $_POST('chapter');
$verse = $_POST('verse');
$content = $_POST('content');

try {

    $stmt = $db->prepare('INSERT INTO scripture(book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)');
    $stmt->bindValue(':book', $book, PDO::PARAM_STR);
    $stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
    $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    $stmt->execute();
    //$db->query("INSERT INTO scripture(book, chapter, verse, content) VALUES ($book, $chapter, $verse, $content)");
}
catch (PDOException $ex)
{
echo 'Error!: ' . $ex->getMessage();
die();
}


header('Location: display_scriptures.php');
die();

?>