<?php
session_start();
$_SESSION['username'];

?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body >

	<form action="check_login.php" method="post">
		<div class="wrapper">
			<form class="form-signin">
					<div class="form-signin">
					<h2 class="form-signin-heading">Please login</h2>
					<input type="text" value="" name="txtusername" id="txtusername" class="form-control" placeholder="Username"/>
					<input type="password" value="" name="txtpassword" id="txtpassword" class="form-control" placeholder="Password"/>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 
					</div>			
			</form>
		</div>
	</form>
</body>
</html>