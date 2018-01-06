<?php
	require "connection-to-database.php";

	if(isset($_POST['signUp'])){
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$birthday = $_POST['birthday'];
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
		$r_passwd = $_POST['r_passwd'];
		
		$sql = "INSERT INTO user_acc_tbl (fName, lName, bDay, userName, password) VALUES ('$firstname', '$lastname', '$birthday', '$username', '$passwd')";
		if ($conn->query($sql) === TRUE) {
			echo "<script type='text/javascript'>
				alert('$lastname, SUCCESSFULLY REGISTERED!');
				window.location.href = '../signup.php';
			</script>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}	
	
	$conn->close();
?>