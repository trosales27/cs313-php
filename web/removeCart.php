<?php
session_start();
    //echo "REMOVING FROM CART\n";

    print_r($_POST);
    
	echo "Cart is: ";
	foreach($cart as $item) {
		echo $item . "<br>";
	}
	echo "cart size is: " . sizeof($cart);

    print_r($_SESSION['cart']);
	$cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
            if ($item == $_POST['item']) {
                unset($item);
                break;
            }
        }
    } 

	echo "Cart is now: ";
	foreach($cart as $item) {
		echo $item . "<br>";
	}
	echo "cart size is: " . sizeof($cart);
    
	//header('Location: cart.php');

?>