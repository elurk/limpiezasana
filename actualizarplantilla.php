<?php
include("inc/conexion.php");

$sql="update plantilla set nombre='".$_REQUEST['nombre']."',descripcion='".$_REQUEST['descripcion']."',horas='".$_REQUEST['horas']."',producto1='".$_REQUEST['producto1']."',producto2='".$_REQUEST['producto2']."',base='".$_REQUEST['base']."',iva='".$_REQUEST['iva']."',total='".$_REQUEST['total']."' where idplantilla=".$_REQUEST['idplantilla'];
mysql_query($sql);
header('location: fichacliente.php?editp=ok&id='.$_REQUEST['idcliente']);

?>