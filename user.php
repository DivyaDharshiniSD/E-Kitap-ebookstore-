<?php
session_start();
if (isset($_SESSION['username']))
{
?>
<html>
<head>
	<title>E-KITAP(EBook Store)</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" type="text/css" href="user.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="menu">
		<div class="leftmenu">
			<h4> EBOOKSTORE </h4>
		</div>
		<div class="rightmenu">
			<ul>
				<li id="fisrtlist"> Home </li>
				<li> Category</li>
				<li> Books</li>
				<li>contact</li>
				<li>Logout</li>
				<li><a href="#"><i class='fas fa-user-alt' style="font-size:25px;color: white;"></i> </a>
			</ul>
		</div>
	</div>
		<center><br>
			<h1>Welcome to EBookStore</h1><hr><br><br>
	<b><div style="font-size: 20px">
	<h2>Hello <?= "{$_SESSION['username']}" ?></b></h2></center>
</body>
</html>
<?php
}
else
{
	header('location:login.php');
}
?>