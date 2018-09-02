<?php

$host="localhost";
$user="root";
$pass="";
$dbname="db_geolocation";

$conexion=mysql_connect($host,$user,$pass);
mysql_select_db($dbname,$conexion); 
$ip= $_SERVER('REMOTE_ADDR');

$sql1 = "INSERT INTO ip (ip) VALUES ('$ip');";

$result1 = mysql_query($sql1, $conexion);




/* *echo "IP Access: " . $_SERVER['REMOTE_ADDR'] ; */

?>
