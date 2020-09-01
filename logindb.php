<?php session_start();

require('connectdb.php');
	
	if(!empty($_POST))
	{
		$msg="";
		if(empty($_POST['username']))
		{
			$msg[]="Incorrect Username";
		}
		
		if(empty($_POST['password']))
		{
			$msg[]="Password Incorrect";
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
			$username=$_POST['username'];
			
			$query="select * from users where username='$username'";
			
			$res=mysqli_query($conn,$query) or die(mysqli_error($conn));
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['password']==$row['password'])
				{
					$_SESSION=array();
					$_SESSION['username']=$row['username'];
					$_SESSION['user_id']=$row['password'];
					$_SESSION['status']=true;
					
					if($_SESSION['username']!="ADMIN")
					{
						header("location:user.php");
					}
					else
					{
						header("location:admin.php");
					}
				}
				
				else
				{
					echo'<script>alert("Incorrect Password!")</script>'; 
					echo '<script>location.href="login.php"</script>';
				}
			}
			else
			{
				echo'<script>alert("Invalid User!")</script>'; 
				echo '<script>location.href="login.php"</script>';
			}
		}
	
	}
	else
	{
		header("location:login.php");
	}

?>