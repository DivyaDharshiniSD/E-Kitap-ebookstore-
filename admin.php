<?php
session_start();
if (isset($_SESSION['username']))
{
?>
<html>
<head>
	<title>E-Kitap(EBook Store)</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
		<div class="menu">
			<div class="leftmenu">
				<h4> E-Kitap </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<li id="fisrtlist" style="color:blue;"><a href="admin.php">HOME</a></li>
					<li><a href="category.php">Category</a></li>
					<li><a href="books.php">Books</a></li>
					<li><a href="users.php">Users</a></li>
					<li><a href="process_contact.php">Contact</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="profile.php"><i class='fas fa-user-alt' style='font-size:20px;color:black;'></i></a></li>
					</ul>
			</div>
		</div>
		<br>
	<b><div style="font-size: 22px;text-align: center;color:black;">
		<p>Welcome to EBook Store</p><br><hr><br>
	<h2>Hello <?= "{$_SESSION['username']}" ?></b></h2><br><br><br>
	<div class="img">
		<img src="images/adminbook.jpg" alt="Book">
	</div>
</body>
</html>
<?php
}
else
{
	header('location:login.php');
}
?>


