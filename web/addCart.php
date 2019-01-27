<?php
	session_start();

	print_r($_POST);
	if (sizeof($cart) <= 0)
		$cart = array();
	else {
		echo "IT'S GREATER THAN 1\n";
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
	}

	echo "Cart is: ";
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

	echo "<a href='shoppingCart.php'>Go back!</a>";

	//header('Location: shoppingCart.php');
?>