<?php 
	require "connection-to-database.php";
	
	if(isset($_GET['delete'])){
		
		$acc_id = $_GET['delete'];
		
		$sql = "DELETE FROM user_acc_tbl WHERE acc_no = $acc_id";
		
		if ($conn->query($sql) === TRUE) {
			echo "<script type='text/javascript'>
					alert('DELETE SUCCESSFUL!');
					window.location.href = '../dashboard.php?manageUsers&acc_no=$acc_id';
				</script>";
		} else {
			echo "<script type='text/javascript'>
					alert('DELETE ERROR!');
					window.location.href = '../dashboard.php?manageUsers&acc_no=$acc_id';
				</script>";
		}
	}
	
	if(isset($_POST['saveEdit'])){
		
		$acc_no = $_POST['acc_no'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$birthday = $_POST['birthday'];
		$username = $_POST['username'];
		$passwd = $_POST['passwd'];
		$r_passwd = $_POST['r_passwd'];
		
		$sql = "UPDATE user_acc_tbl SET fName='$firstname', lName='$lastname', bDay='$birthday', userName='$username', password='$passwd' WHERE acc_no=$acc_no";

		if ($conn->query($sql) === TRUE) {
			echo "<script type='text/javascript'>
					alert('UPDATE SUCCESSFUL!');
					window.location.href = '../dashboard.php?modifyAccount&acc_no=$acc_no';
				</script>";
		} else {
			echo "<script type='text/javascript'>
					alert('UPDATE ERROR!');
					window.location.href = '../dashboard.php?modifyAccount&acc_no=$acc_no';
				</script>";
		}
	}
	
	$conn->close();
?>