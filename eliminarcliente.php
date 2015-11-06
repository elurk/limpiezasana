<?php
include("inc/conexion.php");

$sql="delete from cliente where idcliente=".$_REQUEST['id'];
mysql_query($sql);
header('location:clientes.php?del=ok');

?>