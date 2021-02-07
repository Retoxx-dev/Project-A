<?php include('functions.php') ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>LoginFormDemoApp</title>
  <meta name="description" content="LoginFormDemoApp">
  <meta name="author" content="KacperDziedzic">
  
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

</head>

<body>
    
  
    <form class="form_fix" method="post" action="login.php">
          <?php echo display_error(); ?>
          <legend>Log in</legend>
          <div class="form-group" >
            <label for="">Email address / Username</label>
            <input type="text" class="form-control"  name="email" placeholder="Email/username">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control"  name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary" name="login_btn" style="float:right" >Submit</button>
          <small id="emailHelp" class="form-text text-muted">You don't have an account? <a href="register.php"> Create one</a></small>
    </form>
  
</body>
</html>