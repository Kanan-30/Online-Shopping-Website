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
    <?php 
     $con=mysqli_connect('localhost','root','');
     mysqli_select_db($con,'k-zone_users');
     $getProducts = "SELECT product_id,name,image,price,rating, Category from products  WHERE Rating ='4.5' and Category!='SportsShoes' and Category!='AC'order by product_id ";
     $gotProducts = mysqli_query($con, $getProducts);
     $row=mysqli_fetch_array($gotProducts);
     $var=$row['Category'];
    if ($var=="Laptop" or $var=="Desktop" or $var=="Camera" or $var=="Kitchen" or $var=="TV") { ?><link rel="stylesheet" href="Laptops.css">
    <?php }  else {?>
        <link rel="stylesheet" href="mobile.css">
        <?php }?>
    <script src="slider.js" defer></script>
    <title>Best Sellers</title>
</head>
<body>
                                                    <!-- Navigation Bar 
............................................................................................................................................... -->
<?php include 'nav.php'; ?>
                                                          <!--Main Page
............................................................................................................................................... -->  
<form method="post" action="add_to_cart.php" >
<div class="brand">
    <?php
        
            $num = mysqli_num_rows($gotProducts);
            if ($num>0) {
                while ($product = mysqli_fetch_array($gotProducts)) {
                    $_SESSION['productID'] = $product['product_id']; 
                    $var=$product['Category'];
                    $rating=$product['rating'];
            
    ?>
    <figure>
        <a href="#img1"><img src="Images/<?php echo $var;?>/<?php echo $product['image'];?>">
        <figcaption><?php echo $product['name'];?>
        <br>
        <figcaption>
        <?php 
     if (substr($rating,1)==.5)
     {
        for ($i=0; $i<$rating-1; $i++)
        {
           ?>
           <i class="fas fa-star color"></i> 
           <?php
        }
        if($rating-$i ==0.5)
        {
            ?>
            <i class="fas fa-star-half color"></i>
            <?php
            for ($i=$rating; $i<4.5; $i++)
            {
                ?>
                <i class="far fa-star color"></i> 
                <?php
            }
     }
    }
    else
    {
        for ($j=0; $j<$rating; $j++)
        {
           ?>
           <i class="fas fa-star color"></i> 
           <?php
        }
           for ($j=$rating; $j<5; $j++)
           {
               ?>
               <i class="far fa-star color"></i> 
               <?php
           }
          }
     ?>
            <span class="price"></i> &emsp;<i class="fas fa-rupee-sign"></i><?php echo $product['price'];?></figcaption></span>
        <button name="submit"  value="<?php echo $product['product_id'];?>" class="button" style="vertical-align:middle"><span>Add to <i class="fas fa-shopping-cart"></i></span></button>
</form>
        <button class="button" style="vertical-align:middle" onclick ="location.href='buy.php?p=<?php echo $product['price'];?>'"><span>Buy Now</span></button>
    </figure>
        </a>    
<?php
    }
}
?>

</div>
</body>
</html>