<?php 
	include "php/connection-to-database.php"; 
	$account_no = $_GET['acc_no'];
?>
<?php if(isset($_GET['logout'])){echo "<script type='text/javascript'>alert('LOGGING OUT...');window.location='login.php'</script>";} ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<nav class="navbar navbar-inverse sidebar" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="dashboard.php?Home&acc_no=<?php echo $account_no; ?>">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					<li ><a href="dashboard.php?manageUsers&acc_no=<?php echo $account_no; ?>">Manage Users<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<li ><a href="dashboard.php?modifyAccount&acc_no=<?php echo $account_no; ?>">Modify Account<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>
					<li ><a href="login.php">Login Page<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-in"></span></a></li>
					<li><a href="signup.php">SignUp Page<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-share"></span></a></li>
					<li ><a href="dashboard.php?logout">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main">
		<div style="height:30px;background-color:black;border-radius:5px;">
		</div>
		<?php if(isset($_GET['Home'])): ?>
			<img src="images/homepage.jpg" style="margin:5% 0 0 12%;"/>
		<?php elseif(isset($_GET['manageUsers'])): ?>
			<div class="container-fluid">
			  <h2>Manage Users</h2>
			  <table class="table table-striped">
				<thead>
				  <tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Birthday</th>
					<th>Username</th>
					<th>Date Created</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody>
				<?php 
					$sql = "SELECT * FROM user_acc_tbl";
					$result = $conn->query($sql); 
					// output data of each row
					while($row = $result->fetch_assoc()):
				?>
				  <tr>
					<td><?php echo $row['fName']; ?></td>
					<td><?php echo $row['lName']; ?></td>
					<td><?php echo $row['bDay']; ?></td>
					<td><?php echo $row['userName']; ?></td>
					<td><?php echo $row['date_created']; ?></td>
					<td><a href="php/dashboard-php.php?delete=<?php echo $row['acc_no']; ?>"><button type="button" class="btn btn-danger btn-xs">Delete <span class="glyphicon glyphicon-trash"></span></button></a></td>
				  </tr>
				<?php endwhile; ?>
				</tbody>
			  </table>
			</div>
		<?php elseif(isset($_GET['modifyAccount'])): ?>
			<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">

				<center><h1><strong>Modify Account</strong></h1></center>
				
				<?php 
					$sql = "SELECT * FROM user_acc_tbl where acc_no=".$account_no;
					$result = $conn->query($sql); 
					// output data of each row
					while($row = $result->fetch_assoc()):
				?>
				<form method="POST" action="php/dashboard-php.php" onsubmit="return checkForm(this);">
					<p>Enter the changes you wish to make and then save!</p>
					<div id="container">
						<div class="row">
						<div class="col-md-6">
						<label>Firstname</label>
						<input type="text" id="firstname" name="firstname" value="<?php echo $row['fName']; ?>" placeholder="First name">
						</div>
						<div class="col-md-6">
						<label>Lastname</label>
						<input type="text" id="lastname" name="lastname" value="<?php echo $row['lName']; ?>" placeholder="Last name">
						</div>
						</div>
						<div class="row">
						<div class="col-md-6">
						<label>Birthday</label>
						<input type="date" id="birthday" value="<?php echo $row['bDay']; ?>" name="birthday">
						</div>
						<div class="col-md-6">
						<label>Username</label>
						<input type="text" id="username" name="username" value="<?php echo $row['userName']; ?>" placeholder="Enter username">
						</div>
						</div>
						<div class="row">
						<div class="col-md-6">
						<label>Password</label>
						<input type="password" id="passwd" name="passwd" value="<?php echo $row['password']; ?>" placeholder="Enter password">
						</div>
						<div class="col-md-6">
						<label>Repeat Password</label>
						<input type="password" id="r_passwd" name="r_passwd" value="<?php echo $row['password']; ?>" placeholder="Enter password">
						</div>
						</div>
						<input type="hidden" id="acc_no" name="acc_no" value="<?php echo $row['acc_no']; ?>">
						<div class="row">
						<div class="col-md-6">
						<a href="dashboard.php?modifyAccount&acc_no=<?php echo $account_no; ?>"><button type="button" class="btn btn-danger" name="cancel">Cancel</button></a>
						</div>
						<div class="col-md-6">
						<button type="submit" class="btn btn-success" name="saveEdit">Save</button>
						</div>
						</div>

				</form>
				<?php endwhile; ?>
			</div>

			<div class="col-md-2" style="margin:3% 0;"></div>
			</div>
		<?php endif; ?>
	</div>
</body>
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/dashboard-css.js"></script>
	<script type="text/javascript" src="js/signUp-validation.js"></script>
</html>
<?php $conn->close(); ?>