<?php
include("inc/conexion.php");

$sql="delete from plantilla where idplantilla=".$_REQUEST['id'];
mysql_query($sql);
header('location: fichacliente.php?del=ok&id='.$_REQUEST['idcli']);

?>