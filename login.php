<?php	
	include 'connection.php';
?>
<html>
<head>
<title> INVENTORY </title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form">

	<form action="welcomepage.php" method="POST">
	  <label for="uname">Username:</label><br>
	  <input type="text" name="uname" placeholder="John"><br>
	  <label for="pword">Password:</label><br>
	  <input type="password" name="pword" placeholder="Doe"><br><br>
	  <input type="submit" value="LOGIN">
	  <button><a href="register.php">register</a></button>

	</form>

	<?php
	
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if (strpos($fullUrl, "signup=empty") == true) {
	echo "<p class='error'>You did not fill in all fields!</p>";
	exit();
	}
	
	
	elseif (strpos($fullUrl, "signup=success") == true) {
	echo "<p class='success'>You have been sigend up!</p>";
	exit();
	}
	
	?>

</div>

</body>
