<?php
	session_start();

	print_r($_POST);

	if (sizeof($cart) == 0)
		$cart = array();
	else {
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
	}

	array_push($cart, $_POST["item"]);
	$_SESSION['cart'] = $cart;
	echo "Cart is: ";
	foreach($cart as $item) {
		echo $item;
	}
	
	header('Location: shoppingCart.php');
?>