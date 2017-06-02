<html>
<?php

$db_name="hackerproject";
$username="root";
$password="";
$hostname="localhost";

$con = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db($db_name,$con) 
  or die("Could not select examples");

?>
</html>