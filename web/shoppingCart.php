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
			<div>
				<form action="addCart.php" method="post">
					<img src="continuum.jpg" alt="continuum keyboard"><br>
					<input type="hidden" value="continuum" name="item">
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="seaboard.jpeg" alt="roli seaboard keyboard"><br>
					<input type="hidden" value="seaboard" name="item">
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="roland-ax-edge.jpg" alt="roland ax-edge"><br>
					<input type="hidden" value="ax-edge" name="item">
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="roland-go.jpg" alt="roland go"><br>
					<input type="hidden" value="roland-go" name="item">
					<button type="submit">Add to Cart</button>
				</form>
			</div>
			<div>
				<form action="addCart.php" method="post">
					<img src="cat-keyboard.jpg" alt="cat keyboard"><br>
					<input type="hidden" value="cat" name="item">
					<button type="submit">Add to Cart</button>
				</form>
			</div>


</body>
</html>