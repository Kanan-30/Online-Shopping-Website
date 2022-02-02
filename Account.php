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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="slider.js" defer></script>
    <title>Your Account</title>
</head>
<body>
<header>
    <?php include 'nav.php'; ?>
        <br>
    </header>
    <?php
    if(!isset($_SESSION['Email']))
    {
        ?>
       
    <button class="button1" style="vertical-align:middle;margin-left:550px; margin-top:100px" onclick="location.href='SignIn.php'"><span>Please SignIn</span></button>
    
    <?php 
    }
    else
    {
    ?>
    <div class="products-container products-container1" style="margin-left:300px" >
    <a href="Order.php">
    <i class="fas fa-box-open openbox"></i>
    <br>
    
    <h2>View Order History<h2>
    </a>
    
</div>
<div class="box" style="margin-left:700px">
    <a href="Edit.php">
    <i class="fas fa-user-lock lock"></i>
    </a>
    <h2>Edit login name and mobile number<h2>
    
</div>
<?php
    }
    ?>
</body>
</html>