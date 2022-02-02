<?php
session_start();
?>
<?php $var=$_GET["b"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php if ($var=="Laptop" or $var=="Desktop" or $var=="Camera" or $var=="Kitchen" or $var=="TV") { ?><link rel="stylesheet" href="Laptops.css">
    <?php }  else {?>
        <link rel="stylesheet" href="Details.css">
        <?php }?>
    <script src="slider.js" defer></script>
    <title><?php echo $var ?></title>
</head>
<body>
                                                    <!-- Navigation Bar 
............................................................................................................................................... -->
<?php include 'nav.php'; ?>
                                                          <!--Main Page
............................................................................................................................................... -->  
<?php
if (isset($_GET["b"]))
{
?>
<div class="brand">
    <?php
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'k-zone_users');
        $getProducts = "SELECT product_id,name,image,price,rating ,details from products WHERE Category= '$var'";
        $gotProducts = mysqli_query($con, $getProducts);
            $num = mysqli_num_rows($gotProducts);
            if ($num>0) {
                while ($product = mysqli_fetch_array($gotProducts)) { 
                    $rating=$product['rating'];
            
    ?>
    <figure>
        <a href="Details.php?c= <?php echo $product['product_id'];?>"><img src="Images/<?php echo $var;?>/<?php echo $product['image'];?>">
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
    </figure>
        </a>    
<?php
    }
}
}
?>
</div>
</body>
</html>