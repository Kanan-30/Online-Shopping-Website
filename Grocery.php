<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="grocery.css">
    <script src="slider.js" defer></script>
    <title>Grocery</title>
</head>
<body>
                                                    <!-- Navigation Bar 
............................................................................................................................................... -->
<?php include 'nav.php'; ?>
                                                          <!--Main Page
............................................................................................................................................... -->  

<img src="Images/Grocery/shopbycate_pc.jpg">
    <a class="img2" href="#Beverages"><img src="Images/Grocery/beverages_pc.jpg" ></a>
    <br>
    <br>
    <div class="images1">
    <a href="products.php?a=Tea"><img src="Images/Grocery/Tea.png"></a>
    <a href="products.php?a=Coffee"><img src="Images/Grocery/Coffee.png"</a>
    <a href="products.php?a=SoftDrinks"><img src="Images/Grocery/SoftDrinks.png"</a>
    <a href="products.php?a=Dmixes"><img src="Images/Grocery/DrinkMixes.png"</a>
    </div>
    <br>
    <br>
    <a class="img2" href="#Dry Fruits"><img src="Images/Grocery/dryfruits_pc.jpg"</a>
    <br>
    <br>
    <div class="images1">
    <a href="products.php?a=DryFruits"><img src="Images/Grocery/DryFruits.png"</a>
    <a href="products.php?a=Snacks"><img src="Images/Grocery/IndianSnacks.png"</a>
    <a href="products.php?a=Chips"><img src="Images/Grocery/Chips.png"</a>
    <a href="products.php?a=Popcorn"><img src="Images/Grocery/Popcorn.png"</a>
    </div>
    <br>
    <br>
    <a class="img2" href="#chocolates_Sweets"><img src="Images/Grocery/chocolates_pc.jpg"</a>
    <br>
    <br>
    <div class="images1">
    <a href="products.php?a=Chocolates"><img src="Images/Grocery/Chocolates.png"</a>  
    <a href="products.php?a=Sweets"><img src="Images/Grocery/Sweets.png"</a> 
    <a href="products.php?a=Cake"><img src="Images/Grocery/Cakes.png"</a>
    <a href="products.php?a=Cookie"><img src="Images/Grocery/Cookies.png"</a>
    <br>
    <br>
    </div>
    <a class="img2" href="#cooking"><img src="Images/Grocery/cooking_pc.jpg"</a>
    <br>
    <br>
    <div class="images1">
        <a href="products.php?a=Oil"><img src="Images/Grocery/Oil.png"</a>
        <a href="products.php?a=Ready"><img src="Images/Grocery/Pasta.png"</a>
        <a href="products.php?a=Baking"><img src="Images/Grocery/baking.png"</a>
        <a href="products.php?a=Spread"><img src="Images/Grocery/spread.png"</a>
    </div>
    <hr>
    <hr>

    <a class="Back" href="Homepage.php"> <i class="fas fa-arrow-left"></i> &ensp;BACK TO HOMEPAGE</a>
</body>
</html>