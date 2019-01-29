<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
<link rel="stylesheet" type="text/css" media="screen" href="shopping.css"/>
</head>
<body>
<h3>Does this look correct?</h3>

<h4>Cart:</h4>
<table>
<?php 
    foreach($_SESSION['cart'] as $item) {
        echo "<form action='removeCart.php' method='post'>
        <input type='hidden' value=$index name='index'><tr><td>$item</td><td>
        <button type='submit'>remove</button></td></tr>";
    }
?>
</table><hr>

<p>Name: <?php echo $_SESSION['name']; ?></p>
<p>Address: <?php echo $_SESSION['address']; ?></p>
<p>State: <?php echo $_SESSION['state']; ?></p>
<p>Zip: <?php echo $_SESSION['zip']; ?></p>

<button onclick="complete.php">Complete Purchase</button>
</body>
</html>