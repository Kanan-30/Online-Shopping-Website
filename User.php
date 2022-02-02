<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'k-zone_users');


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$name=$contact=$email=$pass1=$pass2="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
                $name = $_POST["name"];
                $contact = $_POST["contact"];
                $email = $_POST["email"];
                $pass1 = $_POST["pass1"];
                $pass2 = $_POST["pass2"];
                
        if($_REQUEST['submit']=="Continue")
        {
            
            if($pass1==$pass2)
            {   
                $sql = "INSERT INTO users (Name,Contact,Email,Password)
                VALUES ('$name','$contact','$email','$pass1')";
                if ($conn->query($sql) === TRUE)
                {
                    header("Location:SignIn.php");
                }
                else
                {
                header("Location:Register.php?e=Exists");
                }
            }
            else
            {
                header("Location:Register.php?r=Invalid");
            }       

        } 
    }

$conn->close();
?>