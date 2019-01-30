<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script src="main.js"></script>
</head>

<body>
<?php include 'shoppingHeader.php'; ?>

<form action="confirm.php" method="post">
First Name:<input type="text" name="fname"> 
Last Name:<input type="text" name="lname"><br><br>
Address:<input type="text" name="address">
City: <input type="text" name="city"><br><br>
State: <input type="text" name="state" maxlength=2 width=3>
Zip: <input type="text" name="zip"><br><br>
<button type="submit">Complete Purchase</button>
<a href="cart.php"><button type="button" onclick="">Return to Cart</button></a>
</form>
    
</body>
</html>