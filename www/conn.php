<?php
	$hostname="xxx";  
	$username="xxx";   
	$password="xxx";      
	$dbname="xxx";      
	
	$con = mysql_connect($hostname,$username,$password) or die("Error connecting to database");  // Make Connection	
	mysql_select_db($dbname)                     // Select Database
?>
