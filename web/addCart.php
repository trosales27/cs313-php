<?php
	session_start();

	echo "session array is: \n";
	echo $_SESSION['array'];

		$cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
	}

	foreach($cart as $item) {
		echo $item . "<br>";
	}
	array_push($cart, $_POST["item"]);
	$_SESSION['cart'] = $cart;
	echo "Cart is now: ";
	foreach($cart as $item) {
		echo $item . "<br>";
	}
	echo "cart size is: " . sizeof($cart);

	//echo "<a href='shoppingCart.php'>Go back!</a>";

	header('Location: shoppingCart.php');
?>