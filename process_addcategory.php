<?php
require('connectdb.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['addcat']))
		{
			$msg[]="Please full fill all requirement";
		}
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
	
		
			$addcat=$_POST['addcat'];
			$query="insert into `category`(category_name) values('$addcat')";
			mysqli_query($conn,$query) or die("can't Execute...");
			mysqli_close($conn);
			echo'<script>alert("Record Created Scuccessfully!")</script>'; 
			echo '<script>location.href="category.php"</script>';
		}
	}
	else
	{
		header("location:admin.php");
	}
?>
	
	