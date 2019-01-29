<?php
echo "<a href='shoppingCart.php'><h1>Keys R US</h1></a>
<a href='cart.php'>
<div class='cart'>Cart: 
    <div class='numberCircle'>";
    echo sizeof($_SESSION['cart']);
echo "</div>
</a>
<hr>";
?>