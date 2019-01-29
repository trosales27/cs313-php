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
    <?php include 'shoppingHeader.php'; ?>

    <h2>Your Cart:</h2>
    <?php
    echo "<table>";
        foreach($_SESSION['cart'] as $item) {
            echo "<form action='removeCart.php' method='post'>
            <input type='hidden' value=$item name='item'><tr><td>$item</td><td>
            <button type='submit'>remove</button></td></tr>
            </form>";
    }
    echo "</table>"
    ?>
    <form action="checkout.php" method="get"><button type="submit">Complete Purchase</button></form>
        
    </body>
    </html>