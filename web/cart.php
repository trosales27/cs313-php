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
    <h1>The Music Store (*More creative name coming soon)</h1>
	<a href="cart.php">
	<div class="cart">Cart: 
		<div class='numberCircle'>
			<?php echo sizeof($_SESSION['cart']) ; ?>
		</div>
    </a>
    <hr>
    <h2>Your Cart:</h2>
    <?php
        foreach($cart as $item) {
		    echo $item . "<br>";
	}
    ?>

        
    </body>
    </html>