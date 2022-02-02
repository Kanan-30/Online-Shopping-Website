<?php
session_start();
unset($_SESSION['Email']);
unset($_SESSION['Name']);
header("Location:Homepage.php");
?>