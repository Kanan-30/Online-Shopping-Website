<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="slider.js" defer></script>
    <title>Order Details</title>
</head>
<body>
<header>
    <?php include 'nav.php'; ?>
        <br>
    </header>
    <div class="product">
        <h2><i class="fas fa-check-circle" style="color:green"></i>  Order placed, thank you!</h2>
        <br>
        <h3 style="text-align:center"><a href ="Order.php" >Review your orders</a></h3>
    </div>
    <button class="button1" style="vertical-align:middle" onclick="location.href='Homepage.php'"><span>Continue Shopping</span></button>
</body>
</html>