<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="Register.css">
</head>
<body>



<img src="Images/Kzone.png">
    <br>
<div class="box">
<?php
if (isset($_GET["s"]))
{
?>
<h3 style="text-align:center;color:red">Invalid Email/Password</h3>
<?php
}
?>
<form method="post" action="User_1.php" style="font-family:Georgia;
    font-size:17px; padding-left:20px" >
    <h2>Sign In</h2>
E-mail: <input type="text" name="email" placeholder="abc@xyz.com" required>
<br>
<br>
Password: <input type="password" name="pass" placeholder="Enter Password" required>
<br>
<br>
<input type="submit" name="submit" value="Submit"> 
<br>
<br>
<h4>New to K-zone?</h4>
<a href="Register.php">Create Your K-zone Account<i class="fas fa-caret-right"></i></a>
<br>
<br>
</div>

</body>
</html>