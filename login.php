<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <form name="login-form" action="logindb.php" method="post">
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Username or Email</span>
        <input type="text" name="username" id="username" class="user">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" id="password" class="pass">
      </label>
      <button class="submit" type="submit">Sign In</button>
      <p class="forgot-pass"><a href="forgotpass.php">Forgot Password?</a></p>

      <div class="social-media">
        <ul>
          <li>
            <a href="googleLogin.php">
              <img src="https://www.sofakenews.com/wp-content/uploads/2018/10/5a35540277d9e6.8445514415134443544909.png">
            </a>
          </li>
          <li>
            <a href="facebooklogin.php">
              <img src="https://is1-ssl.mzstatic.com/image/thumb/Purple124/v4/9b/72/ff/9b72ff12-abee-c6f3-76de-79fb7db4afcd/Icon-Production-0-0-1x_U007emarketing-0-0-0-7-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/246x0w.png" >
            </a>
          </li><!-- 
          <li>
            <a href="gitlogin.php">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Font_Awesome_5_brands_github-square.svg/1200px-Font_Awesome_5_brands_github-square.svg.png">
            </a>
          </li> -->
          </ul>
      </div>
    </div>
  </form>

  <form name="login-form" action="insert.php" method="post">
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up now!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in.</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Username</span>
          <input type="text" name="username" id="username" class="user">
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email" id="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" id="password" class="pass">
        </label>
        <label>
          <div style="display:block;float: left;">
            <span>Gender</span><input type="radio" id="gender" name="gender" value="male">Male<input type="radio" id="gender" name="gender" value="female">Female<input type="radio" id="gender" name="gender" value="others">Others
           </label>
        <label>
          <span>Contact</span>
          <input type="tel" name="contact" id="contact" class="contact" placeholder="+91">
        </label>
        <label>
          <span>City</span>
          <input type="city" name="city" id="city" class="city">
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript" src="login.js"></script>
</body>
</html>