<?php
date_default_timezone_set('Asia/Colombo');  // Set timezone.
$con=mysqli_connect("mysql.3owl.com","u769462600_root","amuthan1","u769462600_db");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	

?>