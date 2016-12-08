<?php
session_start();
include 'config.php';
$_SESSION['secretcode'];


?>


<html>
<head>
	<title>ResetPassword</title>
	<meta charset="utf-8">
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="check_resetpw.php" method="post">
	<div class="wrapper">
		<div class="form-signin">
			<h2 class="form-signin-heading">Reset Password</h2>
			<p>Please your insert secret code</p><br>
			<input type="text" value="" name="txtsecret" id="txtsecret" class="form-control" placeholder="secret code" autofocus=""/><br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button> <br>
			<a href="login.php">cancel</a>

		</div>


	</div>
	



</form>



</body>
</html>