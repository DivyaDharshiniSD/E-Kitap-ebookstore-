<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Kitap(EBook Store)</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			
			<div class="leftmenu">
				<h4> E-KITAP </h4>
			</div>

			<div class="rightmenu">
				<ul>
					<li id="fisrtlist"><a href="index.php"> HOME </a></li>
					<li><a href="login.php"> Register </a></li>
					<li><a href="books.php">Books</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="Aboutus">About us</a></li>
				</ul>
			</div>

		</div>

		<div class="text">
			<h2> Welcome to E-Kitap(EBookStore) </h2><br>
			<h3> CHOOSE • PURCHASE • READ </h3><br>
			<h3>Take a look. Read a book.</h3><br>
			<form action="login.php" method="post" name="admin">
			<button id="buttonone">ADMIN</button></form>
			<form name="reader" action="login.php" method="post">
			<button id="buttontwo"> READER</button> </form>
			</form>
		</div>
</div>

<footer><div class="footer" style="color:black;">
  <address>
  YOU CAN CONTACT AT US:<br>
  8072446403<br>
  123 STREET.<br>
  COIMBATORE,TAMIL NADU.
  </address></div>
</footer>
</body>
</html>