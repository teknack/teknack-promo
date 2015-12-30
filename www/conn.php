<?php
	$hostname="localhost";  
	$username="root";   
	$password="";      
	$dbname="teknack_promo";      
	
	$con = mysql_connect($hostname,$username,$password) or die("Error connecting to database");  // Make Connection	
	mysql_select_db($dbname)                     // Select Database
?>
