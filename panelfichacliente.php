
        <div class="panel-body">
          <a href="clientes.php"><span class="glyphicon glyphicon-arrow-left"></span> Volver al listado de clientes</a><br><br>
          <h4>FICHA CLIENTE</h4>

  <?php
  $sql="select * from cliente where idcliente=".$_REQUEST['id'];
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
  ?>

<div class="input-group">
  <span class="input-group-addon">Nombre fiscal</span>
  <input type="text" class="form-control" placeholder="<?php echo $row['nombrefisc'];?>" name="nombrefisc" disabled> 
  <input type="hidden" name="idcliente" value="<?php echo $_REQUEST['id'];?>">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Nombre comercial</span>
  <input type="text" class="form-control" placeholder="<?php echo $row['nombrecom'];?>" name="nombrecom" disabled>
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Direcci&oacute;n</span>
  <input type="text" class="form-control" placeholder="<?php echo $row['direccion'];?>"  name="direccion" disabled>
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Cod. Postal + Poblaci&oacute;n + Provincia</span>
  <input type="text" class="form-control" placeholder="<?php echo $row['poblacion'];?>"  name="poblacion" disabled>
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">CIF</span>
  <input type="text" class="form-control" placeholder="<?php echo $row['cif'];?>"  name="cif" disabled>
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Tel&eacute;fono</span>
  <input type="text" class="form-control" placeholder="<?php echo $row['telefono'];?>"  name="telefono" disabled>
  
</div><br>

<button type="button" class="btn btn-default btn-s"><a href="editarcliente.php?id=<?php echo $row['idcliente'];?>"><span class="glyphicon glyphicon-edit"></span>  Editar Cliente </a></button><br><br>

<hr>

<h4>PLANTILLAS DEL CLIENTE</h4>
          <?php
          if ($_REQUEST['insert']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-ok\"></span> Plantilla insertada correctamente!</div>";
          }
          if ($_REQUEST['editp']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-ok\"></span> Plantilla editada correctamente!</div>";
          }
          if ($_REQUEST['del']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-trash\"></span> Plantilla eliminada correctamente!</div>";
          }          
          ?>
          <button type="button" class="btn btn-default btn-s"><a href="nuevaplantilla.php?id=<?php echo $_REQUEST['id'];?>"><span class="glyphicon glyphicon-plus"></span>  Nueva Plantilla </a>
</button><br><br>


<?php 
echo "<table>
<tr><th>Nombre</th><th>Acci&oacute;n</th></tr>";
$sql2="select nombre,idplantilla from plantilla where idcliente=".$_REQUEST['id'];
$result2=mysql_query($sql2);
while ($row2=mysql_fetch_array($result2)) {
  echo "<tr><td>".$row2['nombre']."</td><td><a href=\"detalleplantilla.php?id=".$row2['idplantilla']."\" title=\"Ver plantilla\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a> <a href=\"editarplantilla.php?id=".$row2['idplantilla']."\" title=\"Editar plantilla\"><span class=\"glyphicon glyphicon-edit\"></span></a> <a href=\"eliminarplantilla.php?id=".$row2['idplantilla']."&idcli=".$_REQUEST['id']."\" title=\"Eliminar plantilla\" onclick=\"return confirmar('¿Est&aacute; seguro de querer eliminar la plantilla?')\"><span class=\"glyphicon glyphicon-trash\"></span></a></td></td></tr>";
}
echo "</table>";
?>


</div>