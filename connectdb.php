<?php
$conn = mysqli_connect('127.0.0.1:3307','root','');
if (!$conn)
{
	die("Database Connection Not Found". mysqli_error($conn));
}

$select_db = mysqli_select_db($conn, 'ebook');
if (!$select_db)
{
	die("Database Connection Failed". mysqli_error($conn));
}

?>