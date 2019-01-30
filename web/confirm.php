<?php
session_start();

$fname = htmlspecialchars($_POST["fname"]);
$lname = htmlspecialchars($_POST["lname"]);
$address = htmlspecialchars($_POST["address"]);
$state = htmlspecialchars($_POST["state"]);
$zip = htmlspecialchars($_POST["zip"]);
?>

<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
<link rel="stylesheet" type="text/css" media="screen" href="shopping.css"/>
</head>

<body>
<?php include 'shoppingHeader.php'; ?>

<h3>Does this look correct?</h3>

<h4>Cart:</h4>
<table>
<?php 
    foreach($_SESSION['cart'] as $item) {
        echo "<tr><td>$item</td><td>";
    }
?>
</table>

<p>First Name: <?php echo $fname; ?> <p>Last Name: <?php echo $lname; ?></p>
<p>Address: <?php echo $address; ?></p>
<p>State: <?php echo $state; ?></p>
<p>Zip: <?php echo $zip; ?></p>


<form action="complete.php" method="get"><button type="submit">Complete Purchase</button></form>
</body>
</html>