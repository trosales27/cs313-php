<?php
session_start();
    //echo "REMOVING FROM CART\n";

    //print_r($_POST);
    
	echo "Cart is: <br>";
	foreach($_SESSION['cart'] as $item) {
		echo $item . "<br>";
	}
    echo "cart size is: " . sizeof($_SESSION['cart']) . "<br>";
    
	//array_push($cart, $_POST["item"]);
	//$_SESSION['cart'] = $cart;


	if (sizeof($_SESSION['cart']) > 0) {
		foreach ($_SESSION['cart'] as $item) {
            echo "Item is $item <br>";
            if ($item == $_POST['item']) {
                echo "Match\n";
                echo $_SESSION['item'];
                unset($_SESSION[$item]);
                break;
            }
        }
    } 

	// echo "Cart is now: ";
	// foreach($_SESSION['cart'] as $item) {
	// 	echo $item . "<br>";
	// }
	// echo "cart size is: " . sizeof($_SESSION['cart']) . "<br>";
    
	//header('Location: cart.php');

?>