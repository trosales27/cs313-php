<?php
//ROCK
include 'load_songs.php';

function computePercentage($rating, $times_voted) {
    //echo "<script>console.log('in function');</script>";
    $percentage = 100 * ($rating / ($times_voted * 5));
    return round($percentage, 2) . "%";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Rock Songs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="music.css">
</head>
<body>
    
<?php include 'top_songs_header.php'; ?>

<h2>Top Rock Songs:</h2>
<table>
<th>Rank</th><th>Name</th><th>Artist</th><th>Album</th><th>Rating</th>
<?php
$i = 1;
foreach ($db->query("SELECT song_name, album, artist, rating, times_voted 
FROM song_info 
WHERE genre = 'Rock' 
ORDER BY rating / (times_voted * 5) DESC") as $song)
{
    $song1 = $song['song_name'];
    $rating = $song['rating'];
    $times_voted = $song['times_voted'];
    echo "<form action='vote.php' method='post'>";
    echo "<input type='hidden' name='song_name' value='$song[song_name]'>";
    echo "<input type='hidden' name='artist' value='$song[artist]'>";
    echo "<input type='hidden' name='rating' value=$rating>";
    echo "<input type='hidden' name='times_voted' value=$times_voted>";
    echo "<tr><td>$i. </td>";
    echo "<td>" . $song['song_name'] . "</td><td>" . $song['artist'] . "</td><td>" . $song['album'] . "</td><td>" . 
    computePercentage($rating, $times_voted) . "</td><td><select name='vote'>
    <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option>
    <option value='4'>4</option><option value='5'>5</option></select></td><td><button type='submit'>Like</button></form>";
    $i++;
}
?>
</table>

</body>
</html>