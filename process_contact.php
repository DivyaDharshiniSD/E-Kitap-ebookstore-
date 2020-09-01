<?php 
session_start();
require('connectdb.php');

	$query="SELECT * FROM `contact`";
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	?>
<!DOCTYPE html>
<html>
<head>
	<title>All Categories</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" type="text/css" href="category.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	<style>
		table{padding:5px;border:10px solid gray}
		td,th{padding:15px}
		tr,td{color: black;font-size: 20px}
	</style>
</head>
<body>
	<div class="menu">
			<div class="leftmenu">
				<h4> EBOOKSTORE </h4>
			</div>
			<div class="rightmenu">
				<ul>
					<li><a href="admin.php">HOME</a></li>
					<li><a href="category.php">Category</a></li>
					<li><a href="books.php">Books</a></li>
					<li><a href="users.php">Users</a></li>
					<li id="fisrtlist"><a href="process_contact.php">Contact</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="profile.php"><i class='fas fa-user-alt' style='font-size:20px;color:black;'></i></a></li>
					</ul>
			</div>
		</div>
		<div class="flex-container">
			<h1>Contact Info</h1><hr><br><br>
		<table border='1' width ='100%' height="70px" >
			<tr>
				<td WIDTH='10%' style="color:#008CBA;"><b><u>S.no</u></b></td>
				<td style="color:#008CBA;" WIDTH='50%'><b><u>ID</u></b></td>
				<td style="color:#008CBA;" WIDTH='50%'><b><u>NAME</u></b></td>
				<td style="color:#008CBA;" WIDTH='50%'><b><u>EMAIL</u></b></td>
				<td style="color:#008CBA;" WIDTH='50%'><b><u>QUERY</u></b></td>				
			</tr>
			<?php
			$count=1;
			while($row=mysqli_fetch_assoc($res))
			{
				echo '<tr>
				<td>'.$count.'
				<td>'.$row['id'].'
				<td>'.$row['name'].'
				<td>'.$row['email'].'
				<td>'.$row['query'].'
				</tr>';
				$count++;
			}
			?>
		</table><br><br><br><br>
		<a href="admin.php" style="font-size:30px;color: #008CBA;;">Go Back?</a>
	</div>
</body>
</html>