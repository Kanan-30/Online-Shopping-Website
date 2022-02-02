<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
    <ul >
        <br>
        <!-- logo -->
        <li><img src="Images/Kzone-1.png" class="logo"></li>
        <!-- search bar -->
        <li>
                <form method="post" action="Search.php" class="search-box-container">
                    <input type="search" id="search-box" name="search-box" placeholder="Search here">
                    <button for="search-box" class="fas fa-search label1" name="Search"></button>
                </form>
        </li>
        <?php if(isset($_SESSION['Email']))
                { ?>

        <li><a href="Account.php">   Hello, <?php echo $_SESSION['Name'];?></a></li>
        <?php
                }
                else
                {
                  ?>
             <li><a href="SignIn.php">   Hello, SignIn</a></li>    
             <?php
                }?> 
        <!-- Profile -->
        <li class="dropdown"><a href="#details">Profile &ensp; <i class="fas fa-caret-down"></i></a>
            <!--DropDown-->
            <ul class="dropdown-menu">
                <li><a href="Account.php">Your Account</a></li>
                <li><a href="Order.php">Your Orders</a></li>
                <li class="divider"></li>
                <?php if(!isset($_SESSION['Email']))
                { ?>
                <li><a href='SignIn.php'>Sign In ?</a></li>
                <?php
                }
                else
                {
                  ?>
                
                  <li><a href='SignOut.php'>Sign Out ?</a></li>
                  <?php
                }
                ?>

               
                
            </ul>
        </li>

        
        <!-- Cart -->
        <li class="cart"><a href="Cart.php" class="fas fa-shopping-cart"> Cart</a></li>
    </ul>
</nav>
                                                            <!-- Side Menu
............................................................................................................................................... -->
<nav>
    <div id="mySidenav" class="sidenav">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        <p class ="user"><i class="fas fa-user"></i> &ensp;
        <?php if(!isset($_SESSION['Email']))
        { ?>
             Hello, Sign In</p>
        <?php
        }
        else
        {
          ?>
          Hello, <?php echo $_SESSION['Name'];
        }
        ?>
        <p class="shop">Trending</p>
        <a href="BestSellers.php">Best Sellers &ensp; <i class="fas fa-angle-right"></i></a>
        <p class="divider"></p>
        <p class="shop">Shop By Category</p>
        <a><span class="shop_by" onclick="openNav1()"> Mobiles and Computers &ensp;<i class="fas fa-angle-right"></i></a>
        <a><span class="shop_by" onclick="openNav2()"> TV, Audio, Camera, Electronics &ensp;<i class="fas fa-angle-right"></i></a>
        <a><span class="shop_by" onclick="openNav3()"> Men's Fashion &ensp;<i class="fas fa-angle-right"></i></a>
        <a><span class="shop_by" onclick="openNav6()"> Grocery &ensp;<i class="fas fa-angle-right"></i></a>
        <p class="divider"></p>
        <p class="shop">Settings</p>
        <a href="Account.php"> <i class="fas fa-user-circle"></i> &ensp; Your Account </a>
        <?php if(!isset($_SESSION['Email']))
                { ?>
                <a href="SignIn.php">Sign In <i class="fas fa-power-off"></i></a>
                <?php
                }
                else
                {
                  ?>
                
                <a href="SignOut.php">Sign Out <i class="fas fa-power-off"></i></a>
                  <?php
                }
                ?>
        
      </div>
                                                    <!-- Mobiles and Computers Side Menu
............................................................................................................................................... -->
      <div id="mySidenav1" class="sidenav1">
          <a class="MainMenu" onclick="closeNav1()"> <i class="fas fa-arrow-left"></i> &ensp;MAIN MENU</a>
          <p class="divider"></p>
        <p class="shop">Mobiles</p>
        <a href="type_mobile.php">Mobile Phones</a>
        <a href="products.php?a=Charger">Chargers & Power Banks</a>
        <p class="divider"></p>
        <p class="shop">Computers</p>
        <a href="products.php?a=Laptop">Laptops</a>
        <a href="products.php?a=Desktop">Desktops</a>
      </div>
                                                <!-- TV, Audio, Camera, Appliances Side Menu
............................................................................................................................................... -->
      <div id="mySidenav2" class="sidenav1">
        <a class="MainMenu" onclick="closeNav2()"> <i class="fas fa-arrow-left"></i> &ensp;MAIN MENU</a>
        <p class="divider"></p>
        <p class="shop">TV</p>
        <a href="products.php?a=TV">Televisions</a>
        <p class="divider"></p>
        <p class="shop">Audio</p>
        <a href="products.php?a=Headphones">Headphones</a>
        <a href="products.php?a=Speaker">Speakers</a>
        <p class="divider"></p>
        <p class="shop">Camera</p>
        <a href="products.php?a=Camera">Cameras</a>
        <p class="divider"></p>
        <p class="shop">Appliances</p>
        <a href="products.php?a=AC">Air Conditioners</a>
        <a href="products.php?a=Refrigerator">Refrigerators</a>
        <a href="products.php?a=Washing">Washing Machines</a>
        <a href="products.php?a=Kitchen">Kitchen Appliances</a>
      </div>
                                                        <!-- Men's Fashion Side Menu
............................................................................................................................................... -->
      <div id="mySidenav3" class="sidenav1">
        <a class="MainMenu" onclick="closeNav3()"> <i class="fas fa-arrow-left"></i> &ensp;MAIN MENU</a>
        <p class="divider"></p>
        <p class="shop">Men's Clothing</p>
        <a href="Fashion.php?b=M_T-shirt">T-Shirts</a>
        <a href="Fashion.php?b=Shirts">Shirts</a>
        <p class="divider"></p>
        <p class="shop">Accessories</p>
        <a href="products.php?a=MWatches">Watches</a>
        <a href="products.php?a=Wallets">Wallets</a>
        <p class="divider"></p>
        <p class="shop">Shoes</p>
        <a href="Fashion.php?b=FormalShoes">Formal Shoes</a>
        <a href="Fashion.php?b=CasualShoes">Casual Shoes</a>
        <a href="Fashion.php?b=SportsShoes">Sports Shoes</a>
      </div>
                                                    
                                                    
      
                                                <!-- Grocery Side Menu
............................................................................................................................................... -->
      <div id="mySidenav6" class="sidenav1">
        <a class="MainMenu" onclick="closeNav6()"> <i class="fas fa-arrow-left"></i> &ensp;MAIN MENU</a>
        <p class="divider"></p>
        <p class="shop">Grocery</p>
        <a href="Grocery.php">All Grocery & Gourmet Foods</a>
        <p class="divider"></p>
        <p class="shop">Beverages</p>
        <a href="products.php?a=Tea">Tea</a>
        <a href="products.php?a=Coffee">Coffee</a>
        <a href="products.php?a=SoftDrinks">Soft Drinks</a>
        <a href="products.php?a=Dmixes">Drink Mixes</a>
        <p class="divider"></p>
        <p class="shop">Dry Fruits & Snacks</p>
        <a href="products.php?a=DryFruits">Dry Fruits</a>
        <a href="products.php?a=Snacks">Indian Snacks</a>
        <p class="divider"></p>
        <p class="shop">Chocolates and Sweets</p>
        <a href="products.php?a=Chocolates">Chocolates</a>
        <a href="products.php?a=Cake">Cakes</a>
        <a href="products.php?a=Sweets">Sweets</a>
        <a href="products.php?a=Cookie">Cookies</a>
        <p class="divider"></p>
        <p class="shop">Cooking and Ready to Eat</p>
        <a href="products.php?a=Oil">Ready to Cook</a>
        <a href="products.php?a=Ready">Oil</a>
        <a href="products.php?a=Baking">Baking Supplies</a>
      </div>
                                                    <!--Horizontal Nav
............................................................................................................................................... -->
      <span class="All" onclick="openNav()"> &#9776; All</span>
        <li><a href="Homepage.php">Homepage</a></li>
        <li><a href="products.php?a=TV">Televisions</a></li>
        <li><a href="Grocery.php">Grocery</a></li>
        <li><a href="type_mobile.php">Mobiles</a></li>
      </ul> 
</nav>
</body>
</html>