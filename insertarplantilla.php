<?php
include("inc/conexion.php");
echo $sql="insert into plantilla (idcliente,nombre,descripcion,horas,producto1,producto2,base,iva,total) values ('".$_REQUEST['idcliente']."','".$_REQUEST['nombre']."','".$_REQUEST['descripcion']."','".$_REQUEST['horas']."','".$_REQUEST['producto1']."','".$_REQUEST['producto2']."','".$_REQUEST['base']."','".$_REQUEST['iva']."','".$_REQUEST['total']."')";
mysql_query($sql);
$insertid=mysql_insert_id();
header('location:fichacliente.php?insert=ok&id='.$_REQUEST['idcliente']);
?>