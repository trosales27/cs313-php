<?php
	session_start();

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
	//echo "Cart is now: ";
	//foreach($cart as $item) {
	//	echo $item . "<br>";
	//}
	//echo "cart size is: " . sizeof($cart);
	
	header('Location: shoppingCart.php');
?>