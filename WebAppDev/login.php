<!DOCTYPE html>
<html>
<head>
	<title>Basic Login, Register, and Management</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="col-md-4"></div>

	<div class="col-md-4">

		<center><h1>Login Page</h1></center>

		<form method="POST" action="php/login-php.php" onsubmit="return checkForm(this);">
			<div id="container">
				<label>Username</label>
				<input type="text" id="username" name="username" placeholder="Enter username">

				<label>Password</label>
				<input type="password" id="passwd" name="passwd" placeholder="Enter password">
        		
    			<button type="submit" name="login">Login</button>
    			<a href="signup.php" class="btn btn-info" role="button" id="signupa">Sign up</a>

			</div>
		</form>
	</div>

	<div class="col-md-4"></div>


</body>
	<script type="text/javascript" src="js/login-validation.js"></script>
</html>