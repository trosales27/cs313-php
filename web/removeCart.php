<?php

    //echo "REMOVING FROM CART\n";

    print_r($_POST);
	$cart = array();
	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
            if ($item == $_POST['item']) {
                unset($item);
                break;
            }
		}
    } 
    
	header('Location: cart.php');

?>