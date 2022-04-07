  * ERROR HANDLER 
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
   * ERROR HANDLER 
   
   