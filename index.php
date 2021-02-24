<?php include('functions.php'); ?>
<?php
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignFormApp Main</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="jumbotron jumbotron_fix">
        <h1 class="display-3">Hello <?php echo $_SESSION['user']['username']; ?></h1>
        <div>
	      	<?php  if (isset($_SESSION['user'])) : ?>
		        <a href="login.php?logout='1'"><button type="button" class="btn btn-primary btncolor">Logout</button></a>
		      <?php endif ?>
    	  </div>
    </div>
</body>
</html>