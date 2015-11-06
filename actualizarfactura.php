<?php
include("inc/conexion.php");

$sql="update factura set idcliente='".$_REQUEST['idcliente']."',numfactura='".$_REQUEST['numfactura']."',fecha='".$_REQUEST['fecha']."',descripcion='".$_REQUEST['descripcion']."',horas='".$_REQUEST['horas']."',producto1='".$_REQUEST['producto1']."',producto2='".$_REQUEST['producto2']."',base='".$_REQUEST['base']."',iva='".$_REQUEST['iva']."',total='".$_REQUEST['total']."' where idfactura='".$_REQUEST['id']."' ";

mysql_query($sql);
header("location: editarfactura.php?id=".$_REQUEST['id']."&edit=ok");



?>