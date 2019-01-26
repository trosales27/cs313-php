<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="shopping.css">
</head>

<body>
	<h1>The Music Store (*More creative name coming soon)</h1>
	<hr>
	<p>This will be a list of items, with a form to check items to add to cart</p>
		<div class="row">
			<form action="addCart.php" method="post">
				<p>Stuff here</p>
				<button type="submit">Add to Cart</button>
			</form>
		</div>
			<div><button onclick="addToCart()">Add to Cart</button></div>
			<div><button onclick="addToCart()">Add to Cart</button></div>
			<div><button onclick="addToCart()">Add to Cart</button></div>
		</div>
</body>
</html>