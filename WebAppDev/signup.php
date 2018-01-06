<!DOCTYPE html>
<html>
<head>
	<title>Basic Login, Register, and Management</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="col-md-3"></div>

	<div class="col-md-6">

		<center><h1><strong>Registration Page</strong></h1></center>

		<form method="POST" action="php/signUp-php.php" onsubmit="return checkForm(this);">
			<p>Please enter your details honestly!</p>
			<div id="container">
				<label>Firstname</label>
				<input type="text" id="firstname" name="firstname" placeholder="First name">

				<label>Lastname</label>
				<input type="text" id="lastname" name="lastname" placeholder="Last name">

				<label>Birthday</label>
				<input type="date" id="birthday" name="birthday">

				<label>Username</label>
				<input type="text" id="username" name="username" placeholder="Enter username">

				<label>Password</label>
				<input type="password" id="passwd" name="passwd" placeholder="Enter password">

				<label>Repeat Password</label>
				<input type="password" id="r_passwd" name="r_passwd" placeholder="Enter password">

				<p>By creating an account you agree to our <a href="">Terms and Privacy</a>.</p>

				<button type="submit" name="signUp">Sign up</button>
				<p><a href="login.php"><i>[Login]</i></a></p>

		</form>
	</div>

	<div class="col-md-3" style="margin:3% 0;"></div>

</body>
	<script type="text/javascript" src="js/signUp-validation.js"></script>
</html>