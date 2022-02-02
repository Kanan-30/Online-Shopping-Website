<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-zone Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Register.css">
</head>
<body>


    <img src="Images/Kzone.png">
    <br>
    <div class="box">
    <?php
if (isset($_GET["r"]))
{
?>
<h3 style="text-align:center;color:red">Passwords do no match</h3>
<?php
}
else if  (isset($_GET["e"]))
{
?>
<h3 style="text-align:center;color:red">Email Already in Use</h3>
<h5 style="text-align:center;font-weight:normal"> Please SingIn to Continue</h5>
<h5 style="text-align:center;font-weight:normal"> Or Create account with different email</h5>
<?php
}
?>
        <h3>Create Account</h3>
        <form method="post" action="User.php"> 
            <label>Your name</label>
            <br>
            <input type="text" name="name" required>
            <br>
            <br>
            <label>Mobile Number</label>
            <br>
            <input type="tel" name="contact"placeholder="1234567890" required pattern="[0-9]{10}">
            <br>
            <br>
            <label>E-mail Address</label>
            <br>
            <input type="email" name="email" placeholder="xyz@abc.com" required>
            <br>
            <br>
            <label>Password</label>
            <br>
            <input type="password" name="pass1" required minlength="3"> 
            <br>
            <br>
            <label>Password again</label>
            <br>
            <input type="password" name="pass2">
            <br>
            <br>
            <input type="submit" name="submit" value="Continue">
        </form>
        <br>
            <hr>
        <h6>Already have an account? <a href="SignIn.php"> Sign in <i class="fas fa-caret-right"></i></a></h6>
    </div>
    
</body>
</html>