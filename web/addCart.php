<?php
	session_start();

	$cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
	}

	array_push($cart, $_POST["item"]);
	$_SESSION['cart'] = $cart;
	
	header('Location: shoppingCart.php');
?>