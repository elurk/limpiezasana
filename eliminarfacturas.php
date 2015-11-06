<?php
include("inc/conexion.php");

$facturas = explode(";", $_REQUEST['f']);
for ($i=0; $i < count($facturas); $i++) { 

$sql="delete from factura where idfactura=".$facturas[$i];
mysql_query($sql);

}

header('location:facturas.php?delvar=ok');

?>