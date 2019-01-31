<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Deep Blue project</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
		<label>Username</label>
                <i class="fa fa-user icon"></i>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
		<label>Password</label> 
                <i class="fa fa-key icon"></i>
  		<input type="password" name="password">
  	</div>
  	<div class="buton">
  		<button type="submit" class="btn" name="login_user"><div id="button"><a href="attributes.php">Login</a></button>
  	</div>
	
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
  	