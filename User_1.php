<?php
session_start();

$url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"k-zone_users");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }



if(isset($_POST['submit']))
{
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM users where Email='$email' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["Name"]=$row['Name'];
      echo "Successfully Logged In";
      header("Location:Homepage.php");
    }
    else
    {
        header("Location:SignIn.php?s=Invalid");
    }
}

?>

            