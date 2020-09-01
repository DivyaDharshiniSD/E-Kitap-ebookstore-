<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <center>
  <div class="cont">
    <div class="form sign-in">
      <h1 style="color: darkslategray;padding: 10px 20px;">Forgot Password</h1>
     <form name="signup" action="fpupdate.php" method="post">
      <label>
        <span>Username or Email</span>
        <input type="text" name="username" id="username" class="user">
      </label>
      <label>
        <span>New Password</span>
         <input type="password" name="password" id="password" class="pass">
      </label>
      <label>
        <span> Confirm Password</span>
        <input type="password" name="confirmpassword" id="confirmpassword">
      </label>
      <button class="submit" type="submit">Reset</button>
      <p class="forgot-pass"><a href="login.php">Back to Login?</p>
      </center>
      </body>
      </html>
