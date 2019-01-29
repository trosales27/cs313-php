<?php
session_start();
    //echo "REMOVING FROM CART\n";

    print_r($_POST);
    
	echo "Cart is: ";
	foreach($_SESSION['cart'] as $item) {
		echo $item . "<br>";
	}
	echo "cart size is: " . sizeof($_SESSION['cart']);

	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
            if ($item == $_POST['item']) {
                unset($item);
                break;
            }
        }
    } 

	echo "Cart is now: ";
	foreach($_SESSION['cart'] as $item) {
		echo $item . "<br>";
	}
	echo "cart size is: " . sizeof($_SESSION['cart']);
    
	//header('Location: cart.php');

?>