<?php
require("dbConnect.php");
 

//print_r($_POST);
//echo "book"  . $_POST('book');
$book = htmlspecialchars($_POST['book']);
$chapter = htmlspecialchars($_POST['chapter']);
$verse = htmlspecialchars($_POST['verse']);
$content = htmlspecialchars($_POST['content']);
echo "book is: $book<br> chap is: $chapter<br> verse is: $verse<br> content is: $content";
//foreach($content as $value) {

    //echo "content is $content";
    //$content = $value . "<br>";
 
// }

    // $stmt = $db->prepare('INSERT INTO scripture(book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)');
    // $stmt->bindValue(':book', $book, PDO::PARAM_STR);
    // $stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
    // $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
    // $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    // $stmt->execute();
    //$db->query("INSERT INTO scripture(book, chapter, verse, content) VALUES ($book, $chapter, $verse, $content)");

// catch (Exception $ex)
// {
// echo 'Error!: ' . $ex->getMessage();
// echo "<script alert($ex->getMessage())</script>";
// die();
// }


//header('Location: display_scriptures.php');
//die();

?>