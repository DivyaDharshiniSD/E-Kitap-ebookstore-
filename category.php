<?php
session_start();
$hostname = "127.0.0.1:3307";
$username = "root";
$password = "";
$databaseName = "ebook";

$conn = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `category`";
$result1 = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" type="text/css" href="category.css">
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
					<li><a href="admin.php">HOME</a></li>
					<li id="fisrtlist"><a href="category.php">Category</a></li>
					<li><a href="books.php">Books</a></li>
					<li><a href="users.php">Users</a></li>
                    <li><a href="process_contact.php">Contact</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="profile.php"><i class='fas fa-user-alt' style='font-size:20px;color:black;'></i></a></li>
					</ul>
			</div>
		</div>

		<div class="flex-container">
			<h1>Category</h1><hr><br><br>
			<div style="text-align: center;">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR6Z77bNjTFQCYBK9rTYg9PouCX3ceWT1_d1w&usqp=CAU" alt="Book" width="60%" height="100px"></div><br><br>
			<!-- <h2>Add Category</h2><br> -->
			<form name="addcat" action="process_addcategory.php" method="post">
			<label>
				<p>Add Category</p>
				<input type="text" name="addcat"><br><br>
			</label>  <input type="submit" value="ADD"></form>

			<!-- <h2>Delete Category</h2><br> -->
			<form action="process_delcategory.php" method="post"><br>
			<label>
				<p>Delete Category</p>
				<select class='delcat' name ='delcat' style="width: 40%;height:30px;font-size:17px;color: black;">
					<option value=""></option>
					<?php while($row1 = mysqli_fetch_array($result1)):;?>
						<option value="<?php echo $row1[0];?>"><?php echo $row1[1];
						?></option>
					<?php endwhile;?>
				</select><br><br>
			</label>  <input type="submit" value="DELETE"></form><br><br><br>

			<a href="process_allcat.php" style="color:#008CBA;font-size: 25px;">List all Categories.</a>

			<!-- <form name="allcat" action="process_allcat.php" method="post"><br>
			<input type="submit" value="ALL CATEGORIES" style="width:80%;height:50px;"></form> -->

		</div>
</body>
</html>