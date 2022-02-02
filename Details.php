
<?php 
session_start();
$var1=$_GET['c']; 
$_SESSION['prodID'] = $var1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="Details.css">
    <script src="slider.js" defer></script>
    <link rel="stylesheet" href="mobile.css">
    <title>K-zone Fashion</title>
</head>
<body>
                                                    <!-- Navigation Bar 
............................................................................................................................................... -->
<?php include 'nav.php'; ?>
                                                          <!--Main Page
............................................................................................................................................... -->  
<?php
if (isset($_GET["c"]))
{
?>
<div class="slider T1">
<?php

        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'k-zone_users');
        $gotProducts = mysqli_query($con, "SELECT product_id, name,n_image,n_colour,price,color,details,images,Category from product_details WHERE product_id='$var1'");
            $num = mysqli_num_rows($gotProducts);
            if ($num>0) {
                while ($product = mysqli_fetch_array($gotProducts)) { 
                  $PID = $product['product_id'];
    ?>
  <ul>
    <li class="arrow_button"><button onclick="plusDivs(-1)"><i class="fas fa-chevron-left"></i></button></li>
    <?php for ($x = 0; $x <$product['n_image']; $x++)
    {
      ?>
    <li><img src="Images/<?php echo $product['Category'];?>/<?php echo str_split($product['images'],8)[$x];?>" class="mySlides" ></li>
    <?php
    }
    ?>
    <li class="arrow_button"><button onclick="plusDivs(1)"><i class="fas fa-chevron-right"></i></button></li>   
  </ul>  
  &emsp; &emsp;
<div class="T1 Side" id="T1">
  <h2><?php echo $product['name']?></h2>
<p><i class="fas fa-rupee-sign"></i> <?php echo $product['price'];?>/-</p>
<form method="post" action="add_to_cart.php" >
  <div class="size">
Size:
<input type="radio" name="size" value="S">S
<input type="radio" name="size" value="M">M
<input type="radio" name="size" value="L">L
<input type="radio" name="size" value="XL">XL
<br>
<h3>Colors:</h3>
<select name="color" id="color">
<?php for ($x = 0; $x <$product['n_colour']; $x++)
    {
      ?>
<option value="<?php echo str_split($product['color'],6)[$x];?>"><?php echo str_split($product['color'],6)[$x];?></option>
<?php
    }
    ?>
</select>
<h4>Product Details:</h4>
<?php
echo $product['details'];
$price=$product['price'];
?>
</div>
  </div>
<?php
    }
}
    }
?>
<br>
<br>
<br>
<br>
&emsp; &emsp;&emsp; &emsp;
<button  name="submit"  value="details" class="button" style="vertical-align:middle"><span>Add to <i class="fas fa-shopping-cart"></i></span></button>
</form>        
<button class="button" style="vertical-align:middle" onclick ="location.href='buy.php?b=<?php echo $price;?>&PID=<?php echo $PID;?>&size=<?php echo ''?> &color=<?php echo ''?>'"><span>Buy Now</span></button>

</div>
</body>
</html>