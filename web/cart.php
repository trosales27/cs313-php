<?php
session_start();

?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script src="main.js"></script>
    </head>
    <body>
    <a href="shoppingCart.php"><h1>Keys R Us</h1></a>
	<a href="cart.php">
	<div class="cart">Cart: 
		<div class='numberCircle'>
			<?php echo sizeof($_SESSION['cart']) ; ?>
		</div>
    </a>
    <hr>
    <h2>Your Cart:</h2>
    <?php
    echo "Your cart: <br><table>";
        foreach($cart as $item) {
		    echo "<tr><td>$item</td></tr>";
    }
    echo "</table>"
    ?>

        
    </body>
    </html>