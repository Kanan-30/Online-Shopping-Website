<?php
session_start();
if (isset($_GET["r"]))
{
    $ID=$_GET["r"]; 
    $size=$_GET['size'];
    $color=$_GET['color'];
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'k-zone_users');
    $email = $_SESSION["Email"];
    $delete=mysqli_query($con,"DELETE from cart where email='$email' and product_id='$ID' and Color= '$color' and Size= '$size' ");
    header("Location:Cart.php");
}