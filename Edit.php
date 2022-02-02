<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Register.css">
</head>
<body>


    <img src="Images/Kzone.png">
    <br>
    <div class="box">
        <h3>Update Details</h3>
        <form method="post" action="User_2.php"> 
            <label>Your name</label>
            <br>
            <input type="text" name="name" required>
            <br>
            <br>
            <label>Mobile Number</label>
            <br>
            <input type="tel" name="contact" required pattern="[0-9]{10}">
            <br>
            <br>
            <input type="submit" name="submit" value="Continue">
        </form>
        <br>
            <hr>
    </div>
    
</body>
</html>