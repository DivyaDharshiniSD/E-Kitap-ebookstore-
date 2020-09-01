<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "ebook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$query=$_POST['query'];

$sql = "INSERT INTO `contact`(name,email,query)
VALUES('$name', '$email','$query')";
 
 
if ($conn->query($sql) === TRUE) {
  echo'<script>alert("Thankyou for visiting!")</script>'; 
  echo '<script>location.href="contact.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>