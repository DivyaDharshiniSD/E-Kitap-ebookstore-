<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Kitap(EBook Store)</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body style="background-color:white;">
	<div class="menu" style="background-color:#008CBA;">
		<div class="leftmenu">
			<h4> E-KITAP </h4>
		</div>
		<div class="rightmenu">
			<ul>
				<li><a href="index.php"> Home</a></li>
				<li><a href="login.php"> Register </a></li>
				<li><a href="books.php">Books</a></li>
				<li id="fisrtlist"><a href="contact.php">Contact</a></li>
				<li><a href="Aboutus">About </a></li>
			</ul>
		</div>
	</div>
	<div class="flex-container">
		<form action="contactdb.php" method="post">
		<h1>Contact</h1><hr><br><br>
		<pre style="font-size:20px;justify-content:center;color:#008CBA;"><i><b>
   I’d love to hear from you!

   Complete the form to send me an email.</b></i></pre><br><br><br><br>
		<label>
			<p>Name :  &nbsp&nbsp&nbsp&nbsp
			<input type="text" name="name" class="name" required></p>
		</label><br><br>
		<label>
			<p>Email : &nbsp&nbsp&nbsp&nbsp
			<input type="email" name="email" class="email" required></p>
		</label><br><br>
		<label>
			<p>Query : &nbsp&nbsp&nbsp&nbsp
			<textarea name="query" class="query" required></textarea></p>
			<!-- <pre>
			A longer block of help text that breaks onto 
		    a new line and may extend beyond one line.</pre> -->
		</label><br><br>
			<input type="submit" name="btn" value="SUBMIT">
			<a href="index.php"><input type="button" name="cancel" value="BACK"></a>
		</form>
	</div>
</body>
</html>