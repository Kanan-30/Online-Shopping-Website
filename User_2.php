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
    $name = $_POST["name"];
    $contact = $_POST["contact"];
   $email= $_SESSION["Email"];
    $sql=mysqli_query($conn,"SELECT * FROM users where Email='$email'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
       
        $sql=mysqli_query($conn," UPDATE users SET Name ='$name', Contact ='$contact' where Email='$email'");
        header("Location:SignIn.php");
    }
}

?>

            