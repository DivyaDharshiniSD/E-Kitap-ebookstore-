<?php
session_start();
require('connectdb.php');
   if(!empty($_POST))
   {
      $msg=array();
      if(empty($_POST['delcat']))
      {
         $msg[]='Please full fill all requirement';
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
         $del= $_POST['delcat'];
         $query = "DELETE FROM `category` WHERE category_name = '$del'";
         mysqli_query($conn,$query) or die(mysqli_error($conn));
         echo'<script>alert("Record Deleted Scuccessfully!")</script>'; 
         echo '<script>location.href="category.php"</script>';
         mysqli_close($conn);
      }
   }
   else
   {
      header('location:admin.php');
   }
?>