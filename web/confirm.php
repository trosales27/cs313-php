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
<a href="shoppingCart.php"><h1>Keys R US</h1></a>
	<a href="cart.php">
	<div class="cart">Cart: 
		<div class='numberCircle'>
			<?php echo sizeof($_SESSION['cart']) ; ?>
		</div>
	</a>
	<hr>
<h3>Does this look correct?</h3>

<h4>Cart:</h4>
<table>
<?php 
    foreach($_SESSION['cart'] as $item) {
        echo "<tr><td>$item</td><td>";
    }
?>
</table>

<p>Name: <?php echo $_SESSION['name']; ?></p>
<p>Address: <?php echo $_SESSION['address']; ?></p>
<p>State: <?php echo $_SESSION['state']; ?></p>
<p>Zip: <?php echo $_SESSION['zip']; ?></p>


<form action="complete.php" method="get"><button type="submit">Complete Purchase</button></form>
</body>
</html>