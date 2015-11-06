
        <div class="panel-body">

                    <?php
          if ($_REQUEST['edit']=='ok'){
            echo "<div class=\"alert alert-success\" role=\"alert\">Cliente editado correctamente!</div>";
          } ?>

          <h4>EDITAR CLIENTE</h4>

  <?php
  $sql="select * from cliente where idcliente=".$_REQUEST['id'];
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
  ?>
<form action="actualizarcliente.php" method="POST">
  <input type="hidden" value="<?php echo $_REQUEST['id'];?>" name="id">
<div class="input-group">
  <span class="input-group-addon">Nombre fiscal</span>
  <input type="text" class="form-control" value="<?php echo $row['nombrefisc'];?>" name="nombrefisc"> 
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Nombre comercial</span>
  <input type="text" class="form-control" value="<?php echo $row['nombrecom'];?>" name="nombrecom">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Direcci&oacute;n</span>
  <input type="text" class="form-control" value="<?php echo $row['direccion'];?>"  name="direccion">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Cod. Postal + Poblaci&oacute;n + Provincia</span>
  <input type="text" class="form-control" value="<?php echo $row['poblacion'];?>"  name="poblacion">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">CIF</span>
  <input type="text" class="form-control" value="<?php echo $row['cif'];?>"  name="cif">
  
</div><br>
<div class="input-group">
  <span class="input-group-addon">Tel&eacute;fono</span>
  <input type="text" class="form-control" value="<?php echo $row['telefono'];?>"  name="telefono">
 </div><br>

 <div class="input-group">
  
  <input type="submit" class="form-control" value="Guardar cambios">
  
</div><br>

<a href="clientes.php"><span class="glyphicon glyphicon-arrow-left"></span> Volver al listado de clientes</a>

</div>