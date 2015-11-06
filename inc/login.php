<?php
include("conexion.php");
mysql_query("SET NAMES 'utf8'");

if(!isset($_SESSION['name'])){
  if($_REQUEST['name']!="" && $_REQUEST['pass']!=""){

//execute the SQL query and return record
    $sql="select nombre,clave FROM usuario where nombre='".$_REQUEST['name']."'";
$result = mysql_query($sql,$conexion);

//fetch tha data from the database 
$row = mysql_fetch_array($result);
if($row[0]!=""){
  if (md5($_REQUEST['pass'])==$row[1]) {
    $_SESSION['name']=$row[0];
  }else{
  header('location:index.php?log=error');}
}else{
  header('location:index.php?log=error');
}
  }else{
   header('location:index.php?log=error');
  }
}

?>