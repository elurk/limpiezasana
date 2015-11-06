<?php
include("inc/conexion.php");

$primera=$_REQUEST['primera'];
$primera=$primera-1;

$plantillas = explode(";", $_REQUEST['p']);
for ($i=0; $i < count($plantillas); $i++) { 
	
	$sql="select * from plantilla where idplantilla=".$plantillas[$i];
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);

	$sql2="insert into factura (idcliente,numfactura,fecha,descripcion,horas,producto1,producto2,base,iva,total) values ('".$row['idcliente']."','".$primera."-".date('y')."','".date('Y-m-d')."','".$row['descripcion']."','".$row['horas']."','".$row['producto1']."','".$row['producto2']."','".$row['base']."','".$row['iva']."','".$row['total']."')";
	mysql_query($sql2);

	$primera++;
}

header('location:facturas.php?gen=ok');

?>