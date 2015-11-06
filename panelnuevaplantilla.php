
        <div class="panel-body">
          <a href="fichacliente.php?id=<?php echo $_REQUEST['id'];?>"><span class="glyphicon glyphicon-arrow-left"></span> Volver a la ficha del cliente</a><br><br>
          <h4>NUEVA PLANTILLA DE FACTURA</h4>
<form action="insertarplantilla.php" method="POST">


<?php
$sql="select idcliente,nombrefisc from cliente where idcliente=".$_REQUEST['id'];
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$sql2="select iva from empresa where idempresa=1";
$result2=mysql_query($sql2);
$row2=mysql_fetch_row($result2);
$iva=round($row2[0],0);

?>

<div class="input-group">
  <span class="input-group-addon">Cliente</span>
  <input type="hidden" name="idcliente" value="<?php echo $_REQUEST['id'];?>">
  <input type="text" class="form-control" placeholder="Cliente" name="cliente" value="<?php echo $row['nombrefisc'];?>" disabled>
</div><br>

<div class="input-group">
  <span class="input-group-addon">Nombre Plantilla</span>
  <input type="text" class="form-control" placeholder="Nombre Plantilla" name="nombre">
  
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