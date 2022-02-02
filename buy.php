<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="buy.css">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
if(!isset($_SESSION['Email']))
{
  
?>
<button class="button1" style="vertical-align:middle;margin-left:550px; margin-top:100px" onclick="location.href='SignIn.php'"><span>Please SignIn</span></button>
<?php
}
else
{
  $email = $_SESSION['Email'];
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'k-zone_users');
if (isset($_GET["b"]))
{
  $productId=$_GET["PID"]; 
  $size =$_GET["size"];
  $color = $_GET["color"];
  $total=$_GET["b"]; 
  $get_order= mysqli_query($con,"SELECT * FROM Orders where product_id= '$productId' and email = '$email'");
  $row=mysqli_fetch_array($get_order);
  
        if(is_array($row))
        {
          $qty=$row['Quantity'];
            $qty=$qty+1;
            $update_to_order = mysqli_query($con,"UPDATE Orders SET Quantity= '$qty' WHERE product_id=$productId"); 
        }
        else
        {
          $qty=1;
            $add_to_order= mysqli_query($con,"INSERT INTO Orders (product_id,Email,Quantity,Size,Color)VALUES ($productId ,'$email','$qty','$size','$color')"); 

          }
}
else if(isset($_GET["p"]))
{
    $get_products= mysqli_query($con,"SELECT * FROM cart where email = '$email'");
    while ($row1=mysqli_fetch_array($get_products))
    {
      $total=$_GET["p"]; 
      $productId=$row1["product_id"];  
      $size=$row1["Size"];
      $color=$row1["Color"]; 
      $get_order= mysqli_query($con,"SELECT * FROM Orders where product_id= '$productId' and email = '$email'");
      $row=mysqli_fetch_array($get_order);
            if(is_array($row))
            {
                $qty=$row['Quantity'];
                $qty=$qty+1;
                $update_to_order = mysqli_query($con,"UPDATE Orders SET Quantity= '$qty' WHERE product_id=$productId"); 
            }
            else
            { $qty=$row1["Quantity"];

                $add_to_order= mysqli_query($con,"INSERT INTO Orders (product_id,Email,Quantity,Size,Color)VALUES ($productId ,'$email','$qty','$size','$color')"); 
  
              }
$delete=mysqli_query($con,"DELETE from cart where email='$email'");
}
}
?>
<img src="Images/Kzone.png">
<div class="row">
    <div class="container">
      <form action="Order_Placed.php">
        <div class="row">
          <div class="col-50">
          <h3>Payment</h3>
            <h3>Total Amount:<?php echo $total?> </h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" required>
            <label for="ccnum">Card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expyear">Expiry Date</label>
            <input type="Date" id="expyear" name="expyear" required>
            <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="000" required pattern="[0-9]{3}">
        </div>
        <label>
        </label>
        <button class="btn" style="vertical-align:middle"><span>Pay & Place Order</span></button>
        
      </form>
<?php
}
?>
</body>
</html>
