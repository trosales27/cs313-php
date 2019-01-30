<?php
session_start();
    
    $cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
    }
    
    echo "Cart is: ";
	foreach($cart as $item) {
		echo $item . "<br>";
	}

	// array_push($cart, $_POST["item"]);
	// $_SESSION['cart'] = $cart;

    if (($key = array_search($_POST['item'], $cart)) !== false) {
        unset($cart[$key]);
    }


	echo "Cart is: ";
	foreach($cart as $item) {
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
    
	//header('Location: cart.php');

?>