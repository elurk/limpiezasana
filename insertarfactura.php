<?php
include("inc/conexion.php");
echo $sql="insert into factura (idcliente,numfactura,fecha,descripcion,horas,producto1,producto2,base,iva,total) values ('".$_REQUEST['idcliente']."','".$_REQUEST['numfactura']."','".$_REQUEST['fecha']."','".$_REQUEST['descripcion']."','".$_REQUEST['horas']."','".$_REQUEST['producto1']."','".$_REQUEST['producto2']."','".$_REQUEST['base']."','".$_REQUEST['iva']."','".$_REQUEST['total']."')";
mysql_query($sql);
$insertid=mysql_insert_id();
header('location:facturas.php?insert=ok&idfact='.$insertid);
?>