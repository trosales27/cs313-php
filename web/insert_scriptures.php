<?php
require("dbConnect.php");

$book = htmlspecialchars($_POST['book']);
$chapter = htmlspecialchars($_POST['chapter']);
$verse = htmlspecialchars($_POST['verse']);
$content = htmlspecialchars($_POST['content']);
if (isset($_POST['new_topic']))
{
    $new_topic = $_POST['new_topic'];
}

$stmt = $db->prepare('INSERT INTO scriptures(book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)'); /*Insert ia new topic into the topci table here*/
$stmt->bindValue(':book', $book, PDO::PARAM_STR);
$stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
$stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->execute();

header('Location: display_scriptures.php');
die();

?>