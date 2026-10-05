<?php 
//MY LOGIN DATABASE CONNECTION
include_once 'database.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['user'];
     $password = $_POST['pass'];
     $sql = "INSERT INTO login (user,password)
     VALUES ('$name','$password')";
     if (mysqli_query($conn, $sql)) { 
        echo " <script> alert('Login Succesfully');</script>;
        <script> window.location.href = 'index.html';</script>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
} 
?> 
