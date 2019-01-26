<?php
	session_start();

	if (sizeof($cart) == 0)
		$cart = array();
	else 
		$cart = $_SESSION['cart'];
	
	array_push($cart, $_POST['item']);
	$_SESSION['cart'] = $cart;

	header('Location: shoppingCart.php');
?>