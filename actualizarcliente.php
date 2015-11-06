<?php
include("inc/conexion.php");

$sql="update cliente set nombrefisc='".$_REQUEST['nombrefisc']."',nombrecom='".$_REQUEST['nombrecom']."',direccion='".$_REQUEST['direccion']."',poblacion='".$_REQUEST['poblacion']."',cif='".$_REQUEST['cif']."',telefono='".$_REQUEST['telefono']."' where idcliente=".$_REQUEST['id'];
mysql_query($sql);
echo $_REQUEST['id'];
echo "string";
header("location: editarcliente.php?id=".$_REQUEST['id']."&edit=ok");

?>

