
        <div class="panel-body">
          <a href="facturas.php"><span class="glyphicon glyphicon-arrow-left"></span> Volver al listado de facturas</a><br><br>
          <h4>NUEVA FACTURA</h4>
<form action="insertarfactura.php" method="POST">
<div class="input-group">
  <span class="input-group-addon">Cliente</span>
  <select class="form-control" name="idcliente">
<?php
$sql="select idcliente,nombrefisc from cliente";
$result=mysql_query($sql);
while ($row=mysql_fetch_array($result)) {
  echo "<option value=".$row['idcliente'].">".$row['nombrefisc']."</option>";
}

$sql2="select iva from empresa where idempresa=1";
$result2=mysql_query($sql2);
$row2=mysql_fetch_row($result2);
$iva=round($row2[0],0);

?>
</select>
</div><br>


<div class="input-group">
  <span class="input-group-addon">Nº Factura</span>
  <input type="text" class="form-control" placeholder="Nº Factura" name="numfactura">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Fecha</span>
  <input type="date" class="form-control" placeholder="fecha" name="fecha">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Descripci&oacute;n</span>
  <input type="text" class="form-control" placeholder="Descripci&oacute;n del trabajo realizado"  name="descripcion">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Horas</span>
  <input type="text" class="form-control" placeholder="Horas * €/hora"  name="horas">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Producto 1</span>
  <input type="text" class="form-control" placeholder="Producto incluido"  name="producto1">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Producto 2</span>
  <input type="text" class="form-control" placeholder="Producto incluido"  name="producto2">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Base Imponible</span>
  <input type="text" class="form-control" placeholder="Base imponible"  name="base" onblur="calculariva()" id="base">
  
</div><br>
<div class="input-group">

  <span class="input-group-addon">IVA <?php echo $iva;?>%</span>
  <input type="text" class="form-control" placeholder="Iva"  name="iva" id="iva">
  <input type="hidden" value="<?php echo $iva;?>" id="ivavalue">
</div><br>
<div class="input-group">
  <span class="input-group-addon">TOTAL</span>
  <input type="text" class="form-control" placeholder="Total"  name="total" id="total">
  
</div><br>

<div class="input-group">
  
  <input type="submit" class="form-control" value="Guardar">
  
</div><br>
</form>



</div>