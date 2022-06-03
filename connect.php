<?php 
$username = "ramana"; 
$password = "password"; 
$hostname = "database10.czrubzwvm0w3.us-east-1.rds.amazonaws.com";
$dbname = "database10";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL"); 
echo "Connected to MySQL using username - $username, password - $password, host - $hostname,dbname - $dbname<br>"; 
$selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again."); 
?>





