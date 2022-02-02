<?php
if(isset($_POST['Search']))
{
   $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'k-zone_users');
    $getProducts = "SELECT product_id,name,image,price,rating,Category from products Where Category!='Shirts' and Category!='M_T-shirt'and
     Category!='SportsShoes' and Category!='CasualShoes' and Category!='FormalShoes' and Category!='Grocery'";
    $gotProducts = mysqli_query($con, $getProducts);
            while ($product = mysqli_fetch_array($gotProducts)) {
                $Category=$product['Category'];
    $search =$_POST["search-box"];  

    if (strcasecmp($Category,$search)==0)
    {
      header("Location:products.php?a=$search");
    }
    else if ($search =="Tshirts" || $search =="Tshirt" || $search =="TShirt" || $search =="TShirts" )
   {
      header("Location:Fashion.php?b=M_T-shirt");
   }
   else if ($search =="shirts" || $search =="shirt" || $search =="Shirt" || $search =="Shirts" )
   {
      header("Location:Fashion.php?b=Shirts");
   }
   else if ($search =="Sports Shoes" || $search =="sports shoes"|| $search =="Sports shoes" || $search =="sport shoes")
   {
      header("Location:Fashion.php?b=SportsShoes");
   }
   else if ($search =="Formal Shoes" || $search =="formal shoes"|| $search =="Formal shoes")
   {
      header("Location:Fashion.php?b=FormalShoes");
   }
   else if ($search =="Casual Shoes" || $search =="casual shoes"|| $search =="Caual shoes" || $search =="Shoes")
   {
      header("Location:Fashion.php?b=CasualShoes");
   }
   else if ($search =="Grocery" || $search =="grocery"|| $search =="Groceries" || $search =="groceries")
   {
      header("Location:Grocery.php");
   }
   else if ($search =="Mobile" || $search =="mobile"|| $search =="Phone" || $search =="phone")
   {
      header("Location:type_mobile.php");
   }
}
        }
?>