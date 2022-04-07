<?php 
	
	include 'connection.php';
	
	$username = $_POST['uname'];
	$password = $_POST['pword'];

	$sql = "INSERT INTO user (`username`, `password`) VALUES ('$username','$password');";
	mysqli_query($conn,$sql);
	
	if (empty($username) || empty($password)) {
	  header("Location: login.php?signup=empty");
	  exit();
	}
	
		header("Location: login.php?signup=success");
		
?>