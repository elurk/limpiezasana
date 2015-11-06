<?php

$sql="select * from plantilla where idplantilla=".$_REQUEST['id'];
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$sql2="select iva from empresa where idempresa=1";
$result2=mysql_query($sql2);
$row2=mysql_fetch_row($result2);
$iva=round($row2[0],0);

$sql3="select * from cliente where idcliente=".$row['idcliente'];
$result3=mysql_query($sql3);
$row3=mysql_fetch_array($result3);



?>
        <div class="panel-body">
          <a href="fichacliente.php?id=<?php echo $row['idcliente'];?>"><span class="glyphicon glyphicon-arrow-left"></span> Volver a la ficha del cliente</a><br><br>
          <h4>EDITAR PLANTILLA DE FACTURA</h4>
<form action="actualizarplantilla.php" method="POST">
<input type="hidden" name="idplantilla" value="<?php echo $_REQUEST['id'];?>">

<div class="input-group">
  <span class="input-group-addon">Cliente</span>

  <input type="text" class="form-control" placeholder="Cliente" name="cliente" value="<?php echo $row3['nombrefisc'];?>" disabled >
  <input type="hidden" name="idcliente" value="<?php echo $row['idcliente'];?>">
</div><br>

<div class="input-group">
  <span class="input-group-addon">Nombre Plantilla</span>
  <input type="text" class="form-control" placeholder="Nombre Plantilla" name="nombre" value="<?php echo $row['nombre'];?>">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Descripci&oacute;n</span>
  <input type="text" class="form-control" placeholder="Descripci&oacute;n del trabajo realizado"  name="descripcion" value="<?php echo $row['descripcion'];?>">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Horas</span>
  <input type="text" class="form-control" placeholder="Horas * €/hora"  name="horas" value="<?php echo $row['horas'];?>">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Producto 1</span>
  <input type="text" class="form-control" placeholder="Producto incluido"  name="producto1" value="<?php echo $row['producto1'];?>">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Producto 2</span>
  <input type="text" class="form-control" placeholder="Producto incluido"  name="producto2" value="<?php echo $row['producto2'];?>">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Base Imponible</span>
  <input type="text" class="form-control" placeholder="Base imponible"  name="base" onblur="calculariva()" id="base" value="<?php echo $row['base'];?>">
  
</div><br>
<div class="input-group">

  <span class="input-group-addon">IVA <?php echo $iva;?>%</span>
  <input type="text" class="form-control" placeholder="Iva"  name="iva" id="iva" value="<?php echo $row['iva'];?>">
  <input type="hidden" value="<?php echo $iva;?>" id="ivavalue">
</div><br>
<div class="input-group">
  <span class="input-group-addon">TOTAL</span>
  <input type="text" class="form-control" placeholder="Total"  name="total" id="total" value="<?php echo $row['total'];?>">
  
</div><br>

<div class="input-group">
  
  <input type="submit" class="form-control" value="Guardar">
  
</div><br>
</form>



</div>