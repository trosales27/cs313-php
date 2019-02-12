<?php
require("dbConnect.php");
 
$book = $_POST('book');
$chapter = $_POST('chapter');
$verse = $_POST('verse');
$content = $_POST('content');
$db->query("INSERT INTO scripture(book, chapter, verse, content) VALUES ($book, $chapter, $verse, $content)");

header('Location: display_scriptures.php');

?>