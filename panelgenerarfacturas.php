
<br><h4>GENERAR FACTURAS</h4><br>
<div class="input-group">
  <span class="input-group-addon">Nº Primera Factura a generar</span>
<form id="form1" name="form1" method="POST" action="">
  <input type="text" class="form-control" placeholder="Nº Primera Factura a generar sin A&ntilde;o;  Ejemplo: 1358 | No poner 1358-14" name="primera" id="primera" required>
 </div><br>
 <h4>Selecciona plantillas con las que generar facturas</h4><br>
 <input type="checkbox" name="todos" id="todos" value="" onchange="javascript:marcar(0)"/>
      Marcar/Desmarcar todas

<?php

$sql="select * from cliente";
$result=mysql_query($sql);
while ($row=mysql_fetch_array($result)) {
	echo "<table>
<tr><th>".$row['nombrefisc']."</th></tr>";
$sql2="select * from plantilla where idcliente=".$row['idcliente'];
$result2=mysql_query($sql2);
while ($row2=mysql_fetch_array($result2)) {
	echo "<tr><td><input type=\"checkbox\" value=\"".$row2['idplantilla']."\"> ".$row2['nombre']."</td></tr>";
}
echo "</table>";
}

echo "<br>";
?>
<button type="button" class="btn btn-default btn-s" onclick="generarfacturas()">Generar Facturas</button>

</form>
<br><br>