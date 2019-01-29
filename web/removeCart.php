<?php
session_start();
    //echo "REMOVING FROM CART\n";

    print_r($_POST);
    
	echo "Cart is: ";
	foreach($_SESSION['cart'] as $item) {
		echo $item . "<br>";
	}
    echo "cart size is: " . sizeof($_SESSION['cart']);
    
    $cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
			array_push($cart, $item);
		}
	}
    echo "cart is :\n";
    foreach($cart as $item) {
        echo $item;
    }

	foreach($cart as $item) {
        if ($item == $_POST['item']) {
            unset($item);
        }
    }
    
    echo "cart is now:\n";
    foreach($cart as $item) {
        echo $item;
    }
	//array_push($cart, $_POST["item"]);
	//$_SESSION['cart'] = $cart;


	// if (sizeof($_SESSION['cart']) > 0) {
	// 	foreach ($_SESSION['cart'] as $item) {
    //         if ($item == $_POST['item']) {
    //             unset($_SESSION[$item]);
    //             break;
    //         }
    //     }
    // } 

	echo "Cart is now: ";
	foreach($_SESSION['cart'] as $item) {
		echo $item . "<br>";
	}
	echo "cart size is: " . sizeof($_SESSION['cart']);
    
	//header('Location: cart.php');

?>