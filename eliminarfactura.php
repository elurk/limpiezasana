<?php
include("inc/conexion.php");

$sql="delete from factura where idfactura=".$_REQUEST['id'];
mysql_query($sql);
header('location:facturas.php?del=ok');

?>