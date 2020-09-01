<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "ebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$sql = "INSERT INTO `users`(username,email,password,gender,contact,city)
VALUES('$username', '$email','$password','$gender','$contact','$city')";
 
 
if ($conn->query($sql) === TRUE) {
  echo'<script>alert("New Record Created Successfully")</script>'; 
  echo '<script>location.href="login.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>