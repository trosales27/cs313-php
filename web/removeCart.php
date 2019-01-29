<?php

    //echo "REMOVING FROM CART\n";

    print_r($_POST);
    echo "cart is\n";
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

    echo "cart is now\n";
    print_r($_SESSION['cart']);
    
	//header('Location: cart.php');

?>