<?php
	require "connection-to-database.php";
	
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['passwd'];
		
		$sql = "SELECT * FROM user_acc_tbl WHERE userName = '$username'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if($row['password'] == $password){
					echo "<script type='text/javascript'>
						alert('LOGIN SUCCESSFUL!');
						window.location.href = '../dashboard.php?Home&acc_no=".$row['acc_no']."';
					</script>";
				}else{
					echo "<script type='text/javascript'>
						alert('LOGIN ERROR! PASSWORD INCORRECT.');
						window.location.href = '../login.php';
					</script>";
				}
			}
		} else {
			echo "<script type='text/javascript'>
				alert('USERNAME ERROR! $username NOT EXIST.');
				window.location.href = '../login.php';
			</script>";
		}
	}
	
	$conn->close();
?>