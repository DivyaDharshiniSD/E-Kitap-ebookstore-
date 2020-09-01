<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "ebook";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}


if ( isset($_POST['username']) and isset($_POST['password']))
{
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    if ($_POST['password'] !== $_POST['confirmpassword'])
     {
      echo'<script>alert("Password and Confirm password should match!")</script>'; 
      echo '<script>location.href="forgotpass.php"</script>';
    }
   else{

    $query = "UPDATE `users` SET password = '$password' WHERE username='$username'";
    if ($conn->query($query) === TRUE) 
    {
    	echo '<script>alert("The password has been updated")</script>';
      echo '<script>location.href="login.php"</script>';
    } 
    else 
    {
    	echo "Error: " . $query. "<br>" . $conn->error;
    }
}}
$conn->close();
?>


