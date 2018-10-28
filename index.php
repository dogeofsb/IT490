<?php
require 'backend/database.php';
session_start(); 
 ?>

 <!DOCTYPE html>
<html>
<head>
  <title>Weather Login/Register</title>
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<link rel="stylesheet" 
href="css/style.css">
</head>

<?php 
///Registering and logging in the user
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 if (isset($_POST['login'])) {
  require 'login.php'; }

  elseif (isset($_POST['register'])
) 
  {
    require 'register.php';
  }

}
?>

<body>
	  <div class="form">

      <div class="tab-content">
        <div id="login">
          <h1>Please Log In</h1>
          <form action="index.php" method="post" autocomplete="off">

            <div class="field-wrap">
              <label>Email Address<span class="req"></span></label>
              <input type="email" required autocomplete="off" name="email"/>
            </div>
            <div class="field-wrap">
              <label>Password<span class="req"</span></label>
              <input type="password" required autocomplete="off" name="password"/>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg btn-block" name="login"/>Login</button>
          </form>

        </div>

        <div id="signup">
          <h1>Please Register</h1>
          <form action="index.php" method="post" autocomplete="off">
            <div class="top-row">
              <div class="field-wrap">
                <label>First Name<span class="req"></span></label>
                <input type="text" required autocomplete="off" name='firstname'/>
              </div>

              <div class="field-wrap">
                <label>Last Name<span class="req"></span></label>
                <input type="text"required autocomplete="off" name='lastname' />
              </div>
            </div>

            <div class="field-wrap">
              <label>Email Address<span class="req"></span></label>
              <input type="email"required autocomplete="off" name='email'/>
            </div>

            <div class="field-wrap">
              <label>Password<span class="req"></span></label>
              <input type="password"required autocomplete="off" name='password'/>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg btn-block" name="register"/>Register</button>

          </form>
        </div>  
        
      </div>
      
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>