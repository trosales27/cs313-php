<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script src="main.js"></script>
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
<form action="confirm.php" method="post">
Name:<input type="text" name="name">
Address:<input type="text" name="address">
City: <input type="text" name="city">
State: <input type="text" name="state">
Zip: <input type="text" name="zip">
<button type="submit">Complete Purchase</button>
</form>
    
</body>
</html>