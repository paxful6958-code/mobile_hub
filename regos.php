<?php 
//MY CHECKOUT DATABASE CONNECTION
include_once 'database.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['username'];
     $email = $_POST['email'];
     $mobile = $_POST['phone'];
     $password = $_POST['password'];
     $sql = "INSERT INTO validate (username,email,phone,password)
     VALUES ('$name','$email','$mobile','$password')";
     if (mysqli_query($conn, $sql)) { 
        echo "<script>alert('Welcome to Our Website. Please Click OK to move further.');</script>
        <script> window.location.href = 'index.html';</script>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
} 
?> 
