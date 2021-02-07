<?php include('functions.php') ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>LoginFormDemoApp</title>
  <meta name="description" content="LoginFormDemoApp">
  <meta name="author" content="KacperDziedzic">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <?php display_error() ?>
    <div >
    <form class="form_fix" method="post" action="register.php">
	
          <legend>Create an account</legend>
          <div class="form-group" >
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control"  placeholder="Username">
          </div>
          <div class="form-group" >
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email address">
          </div>
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" name="password_1" class="form-control"  placeholder="Password">
		  </div>
		  <div class="form-group">
            <label for="password2">Confirm Password</label>
            <input type="password" name="password_2" class="form-control"  placeholder="Confirm Password">
          </div>
          <button type="submit" class="btn btn-primary" name="register_btn" style="float:right" >Submit</button>
          <small  class="form-text text-muted">Already have an account? <a href="login.php"> Log in</a></small>
    </form>
    </div>
</body>
</html>