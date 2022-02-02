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
    <?php
    if(!isset($_SESSION['Email']))
    {
        ?>
        <button class="button1" style="vertical-align:middle;margin-left:550px; margin-top:100px" onclick="location.href='SignIn.php'"><span>Please SignIn</span></button>
    
    <?php
    }
    else
    {
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'k-zone_users');
    $email = $_SESSION["Email"];
    $name= $_SESSION["Name"];
    $get_order= mysqli_query($con,"SELECT * FROM orders where email = '$email'");
    $num=mysqli_num_rows($get_order);
    $total=0;
    $totalqty=0;
    if($num>0)
                {
    ?>
    
    <div class="products-container" style="max-width:800px">
        <div class="product-header">
            <h5 class ="product-title">PRODUCT</h5>
            <h5 class="price" >PRICE</h5>
            <h5 class="quantity" style="padding:0px;">QUANTITY</h5>
            <h5 class="total" >DATE</h5>
        </div>
        <div class="products">
            <?php
            while($products = mysqli_fetch_array($get_order))
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
                $date=$products['Date'];
                $totalqty+=$products['Quantity'];
                ?>
                    <div class="product">
                    <img src="Images/<?php echo $cat;?>/<?php echo $image;?>">
                    </div>
                    <div class ="price"><?php echo $price;?></div>
                    <div class ="quantity" style="padding:0px; width:150px"><?php echo $qty;?></div>
                    <div class ="total"><?php echo $date;?></div>
               
            <?php
                }
                
            }
            ?>
            </div>
    </div>
    <div class="box" style="margin-left: 1000px;">
        <h2>Hello <?php echo $_SESSION['Name'];?>!</h2>
        <h2><b><?php echo $totalqty; ?></b>  Orders Placed    <i class="fas fa-shopping-bag"></i></h2>
        <button class="button1" style="vertical-align:middle" onclick="location.href='Homepage.php'"><span>Continue Shopping</span></button>
    </div>
    <?php
        }
        else
        {
            ?>
                <br>
                <br>
            <h2> <?php echo "No orders Placed Yet !!";?></h2>
            <h3 style="text-align:center"><a href ="Homepage.php" >See Recommendations</a></h3>
    <?php
               
        }
    }
        ?>
        


</body>
</html>