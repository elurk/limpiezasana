
        <div class="panel-body">
          <a href="clientes.php"><span class="glyphicon glyphicon-arrow-left"></span> Volver al listado de clientes</a><br><br>
          <h4>NUEVO CLIENTE</h4>
<form action="insertarcliente.php" method="POST">
<div class="input-group">
  <span class="input-group-addon">Nombre fiscal</span>
  <input type="text" class="form-control" placeholder="Nombre fiscal" name="nombrefisc">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Nombre comercial</span>
  <input type="text" class="form-control" placeholder="Nombre comercial" name="nombrecom">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Direcci&oacute;n</span>
  <input type="text" class="form-control" placeholder="Direcci&oacute;n"  name="direccion">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Cod. Postal + Poblaci&oacute;n + Provincia</span>
  <input type="text" class="form-control" placeholder="Cod. Postal + Poblaci&oacute;n + Provincia"  name="poblacion">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">CIF</span>
  <input type="text" class="form-control" placeholder="12345678X"  name="cif">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Tel&eacute;fono</span>
  <input type="text" class="form-control" placeholder="999 999 999"  name="telefono">
  
</div><br>

<div class="input-group">
  
  <input type="submit" class="form-control" value="Guardar">
  
</div><br>
</form>


</div>