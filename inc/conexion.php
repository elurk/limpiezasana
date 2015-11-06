<?php
mysql_query("SET NAMES 'utf8'");

$username = "limpiezasana";
$password = "Limpiezas0015";
$hostname = "localhost"; 
$db="limpiezasana";
//connection to the database
$conexion = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

 $selected = mysql_select_db($db,$conexion) 
  or die("Could not select database");

 ?>