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
    <title>Shopping Cart</title>
</head>
<body>
    <header>
    <?php include 'nav.php'; ?>
        <br>
        <img src="Images/Cart.png">
    </header>
    <?php
    if(!isset($_SESSION['Email']))
    {
        ?>
        <button class="button1" style="vertical-align:middle;margin-left:550px; margin-top:100px" onclick="location.href='SignIn.php'"><span>Please SignIn</span></button>
    
    <?php }
    else
    {
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'k-zone_users');
    $email = $_SESSION["Email"];
    $name= $_SESSION["Name"];
    $get_cart= mysqli_query($con,"SELECT * FROM cart where email = '$email'");
    $num=mysqli_num_rows($get_cart);
    $total=0;
    if($num>0)
                {
    ?>
    
    <div class="products-container">
        <div class="product-header">
            <h5 class ="product-title">PRODUCT</h5>
            <h5 class="price">PRICE</h5>
            <h5 class="quantity">QUANTITY</h5>
            <h5 class="total">TOTAL</h5>
        </div>
        <div class="products">
            <?php
            while($products = mysqli_fetch_array($get_cart))
            {
                $PID = $products['product_id'];
            $get_products= mysqli_query($con,"SELECT * FROM products where product_id = $PID");
            $row1=mysqli_fetch_array($get_products);
            if(is_array($row1))
            {
                $subtotal=0;
                $cat=$row1['Category'];
                $name=$row1['name'];
                $image=$row1['image'];
                $price=$row1['price'];
                $size=$products['Size'];
                $color=$products['Color'];
                $qty=$products['Quantity'];
                $subtotal+=$price*$qty;
                $total+=$price*$qty;
                ?>
                    <div class="product">
                        <a href="delete.php?r=<?php echo $PID;?> &size=<?php echo $size;?> &color=<?php echo $color;?>"><i class="far fa-minus-square trash"></i></a>
                    <img src="Images/<?php echo $cat;?>/<?php echo $image;?>">
                        <?php echo $name .'<br>';
                        echo $size.'<br>';
                        echo $color;?>
                    </div>
                    <div class ="price"><?php echo $price;?></div>
                    <div class ="quantity"><?php echo $qty;?></div>
                    <div class="total"><i class="fas fa-rupee-sign"></i><?php echo $subtotal;?></div>
            <?php
                }
                
            }
            ?>
            </div>
            <div class ="cartTotalTitle">Total:</div>
            <div class="cartTotal"><i class="fas fa-rupee-sign"></i><?php echo $total;?></div>
    </div>
    <div class="box">
        <h2 >Total:  <i class="fas fa-rupee-sign"></i><?php echo $total;?></h2>
        <button class="button1" style="vertical-align:middle" onclick="location.href='Homepage.php'"><span>Continue Shopping</span></button>
        <button class="button1" style="vertical-align:middle" onclick="location.href='buy.php?p=<?php echo $total;?>&PID=<?php echo $PID;?>&name=<?php echo $_SESSION['Name'];?>&qty=<?php echo $qty;?>&size=<?php echo $size;?>&color=<?php echo $color;?>'"><span>Buy Now</span></button>
    </div>
    <?php
        }
        else
        {
            ?>
                <br>
                <br>
            <h2> <?php echo "Your K-zone cart is empty";?></h2>
            <h3 style="text-align:center"><a href ="Homepage.php" >See Recommendations</a></h3>
    <?php
               
        }
    }
        ?>
        


</body>
</html>