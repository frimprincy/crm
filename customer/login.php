<?php  include_once("settings.php") ;
session_start();
customer_signin()
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Shop Manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
  <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
</head>

<body class="logbody">
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h4>CUSTOMER LOGIN</h4>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
      <label for="user-email" style="padding-top:22px">&nbsp;Email
          </label>
        <input id="user-email" class="form-content" type="email" name="email" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        
      </form>
    </div>
  </div>
</body>

</html>