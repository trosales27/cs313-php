<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Keys R US</title>
	<link rel="stylesheet" type="text/css" href="shopping.css">
</head>

<body>
<?php include 'shoppingHeader.php'; ?>

	<p>This will be a list of items, with a form to check items to add to cart</p>
		<div class="row">
			<div>
				<form action="addCart.php" method="post">
					<img src="continuum.jpg" alt="continuum keyboard"><br>
					<input type="hidden" value="Haken Continuum" name="item">
					<h3>Haken Continuum</h3>
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="seaboard.jpeg" alt="roli seaboard keyboard"><br>
					<input type="hidden" value="Roli Seaboard" name="item">
					<h3>Roli Seaboard</h3>
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="roland-ax-edge.jpg" alt="roland ax-edge"><br>
					<input type="hidden" value="Roland Ax-Edge" name="item">
					<h3>Roland Ax-Edge</h3>
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="roland-go.jpg" alt="roland go"><br>
					<input type="hidden" value="Roland-Go" name="item">
					<h3>Roland Go</h3>
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="cat-keyboard.jpg" alt="cat keyboard"><br>
					<input type="hidden" value="Kat Keyboard" name="item">
					<h3>The Kat Keyboard</h3>
					<button type="submit">Add to Cart</button>
				</form>
			</div>


</body>
</html>