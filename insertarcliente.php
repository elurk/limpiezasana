<?php
include('inc/conexion.php');
echo $sql="insert into cliente (nombrefisc,nombrecom,direccion,poblacion,cif,telefono) values ('".$_REQUEST['nombrefisc']."','".$_REQUEST['nombrecom']."','".$_REQUEST['direccion']."','".$_REQUEST['poblacion']."','".$_REQUEST['cif']."','".$_REQUEST['telefono']."')";

mysql_query($sql);

$idcli=mysql_insert_id();
echo "<br>";
echo $idcli;
header('location: clientes.php?insert=ok&idcli='.$idcli);


?>