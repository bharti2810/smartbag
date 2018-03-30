<?php
include("loginserv.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:300,200" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="style.css">
</head>
<body>
<p id="findpass" >ABA Smartbags</p>
<p id="findpass_body" >“The journey begins”</p>
<form action="" method="post" >
<div class="form">
  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input class="input" type="text" placeholder="Username" id="user" name="user">
    <input class="input" type="password" placeholder="Password" id="pass" name="pass">
  </div>
  <button class="submit" name="submit" type="submit" value="Login" id="submit">Login</button>
</div>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    
</body>
</html>
