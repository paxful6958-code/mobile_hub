<?php 
//MY CHECKOUT DATABASE CONNECTION
include_once 'database.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['user'];
     $password = $_POST['pass'];
     $sql = "INSERT INTO checkout (username,password)
     VALUES ('$name','$password')";
     if (mysqli_query($conn, $sql)) { 
        echo "
        <script> window.location.href = 'checkout-cart.html';</script>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
} 
?> 
