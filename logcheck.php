<?php 
	
	include 'connection.php';
	
	$username = $_POST['uname'];
	$password = $_POST['pword'];

	$sql = "SELECT INTO user (`username`, `password`) VALUES ('$username','$password');";
	mysqli_query($conn,$sql);
	
	if (isset($username) == true || empty($password) == true)  {
	  header("Location: login.php?signin=success");
	  exit();
	}
	
		header("Location: login.php?signup=success");
		
	

?>