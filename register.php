<?php	
	include 'connection.php';
?>
<html>
<head>
<title> INVENTORY </title>
<link rel="stylesheet" href="design.css">

</head>

<body>

<div class="register">

	<form action="signup.php" method="POST">
	
	  <label for="uname">Username:</label><br>
	  <input type="text" name="uname" placeholder="John"><br>
	  <label for="pword">Password:</label><br>
	  <input type="password" name="pword" placeholder="Doe"><br><br>
	  <button><a href="login.php">login</a></button>
	  <button type="submit" name="submit"> Sign Up </button>
	  
	</form>
	
</div>

</body>