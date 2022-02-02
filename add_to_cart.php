<?php
    session_start();
    if(isset($_SESSION['Email']))
    {
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'k-zone_users');
        $email = $_SESSION["Email"];
        $qty=1;
        if($_REQUEST["submit"]=="details")
        {
            
            $size=$_POST['size'];
            $color=$_POST['color'];
            $productId = $_SESSION['prodID'];
            $add_to_cart= mysqli_query($con,"INSERT INTO cart (product_id,email,Quantity,Size,Color)VALUES ($productId ,'$email','$qty','$size','$color')"); 
        }
        else
        {
            $productId= $_REQUEST["submit"];
            $get_products= mysqli_query($con,"SELECT * FROM cart where product_id= '$productId' and email = '$email'");
            $row=mysqli_fetch_array($get_products);
            if(is_array($row))
            {
                $qty+=1;
                $update_to_cart = mysqli_query($con,"UPDATE cart SET Quantity= '$qty' WHERE product_id= $productId"); 
            }
            else
            {
                $add_to_cart= mysqli_query($con,"INSERT INTO cart (product_id,email,Quantity,Size,Color)VALUES ($productId ,'$email','$qty','','')"); 
            }
            
        }
    }
}
header("Location:Cart.php");

?>