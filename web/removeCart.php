<?php
session_start();

    $cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
    }

    if (($key = array_search($_POST['item'], $cart)) !== false) {
        unset($cart[$key]);
    }

    $_SESSION['cart'] = $cart;
    
	header('Location: cart.php');
?>