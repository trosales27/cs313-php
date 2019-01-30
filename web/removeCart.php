<?php
session_start();
    
echo "Session cart is: ";
foreach ($_SESSION['cart'] as $item) {
    echo $item . "<br>";
}

    $cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
    }

	// array_push($cart, $_POST["item"]);
	// $_SESSION['cart'] = $cart;

    if (($key = array_search($_POST['item'], $cart)) !== false) {
        unset($cart[$key]);
    }

    $_SESSION['cart'] = $cart;

    echo "Session cart is now: ";
    foreach ($_SESSION['cart'] as $item) {
        echo $item . "<br>";
    }

	// if (sizeof($_SESSION['cart']) > 0) {
	// 	foreach ($_SESSION['cart'] as $item) {
    //         if ($item == $_POST['item']) {
    //             $delItem = $item;
    //             //unset($_SESSION[$item]);
    //             break;
    //         }
    //     }
    // } 
    // unset($_SESSION['cart']);

	// echo "Cart is now: ";
	// foreach($_SESSION['cart'] as $item) {
	// 	echo $item . "<br>";
	// }
	//echo "cart size is: " . sizeof($_SESSION['cart']) . "<br>";
    
	header('Location: cart.php');

?>