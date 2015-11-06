<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Factura</title>
<style>
h3{
	display:inline;
}

.header img {
  float: left;
  width: 100px;
  height: 100px;
  padding-right: 10px;
}

.header h1 {
  position: relative;
  top: 18px;
  left: 10px;
}

.box{
  border:1px solid;
  margin-left:50px;
  margin-right:50px;  	
}

.centered{
 text-align:center;	
}

.customername{
  text-align:right;
}

.numfactura{
 margin-left:20px;
}


</style>
</head>

<?php
include("inc/conexion.php");

$sql="select * from empresa where idempresa=1";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$sql2="select * from factura where idfactura=".$_REQUEST['id'];
$result2=mysql_query($sql2);
$row2=mysql_fetch_array($result2);

$sql3="select * from cliente where idcliente=".$row2['idcliente'];
$result3=mysql_query($sql3);
$row3=mysql_fetch_array($result3);

?>


<body>
<p>&nbsp;</p>
<blockquote>
  <br>
	<div class="header"><img src="img/logoana.png" width="114" height="116" />
  		<p>
		<h3><?php echo $row['nombrecom'];?></h3><br>
		  <?php echo $row['nombrefisc'];?>: <?php echo $row['cif'];?><br>
		  <?php echo $row['direccion'];?><br>
		  <u><?php echo $row['poblacion'];?></u><br>
		  Tlf: <?php echo $row['telefono'];?>
		  </p> 
	</div>
    <div class="customername">
  	<p>
	  <h3><?php echo $row3['nombrefisc'];?></h3><br>
	  <?php echo $row3['nombrecom'];?><br>
	  <?php echo $row3['direccion'];?><br>
	  <u><?php echo $row3['poblacion'];?></u><br>
	  </p> 
	</div>
  </blockquote>
	  <p>&nbsp;</p>
  <div class="numfactura">

	  <blockquote>
	  N&uacute;mero Factura: <?php echo $row2['numfactura'];?><br>
	  Fecha Factura: <?php echo $row2['fecha'];?><br>
	  CIF: <?php echo $row3['cif'];?>  
	  </blockquote>
  </div>
	<div class="box">
		<blockquote>
    	<?php echo $row2['descripcion'];?><br>
	  <div class="centered"><?php echo $row2['horas'];?></div><br>
	  <div class="centered">
	  BASE IMPONIBLE ....................... <?php echo $row2['base'];?> &euro;<br>
	  IVA <?php echo round($row['iva'],2);?> % (+) ................................. <?php echo $row2['iva'];?> &euro;<br>
      <hr>
      TOTAL FACTURA ..................... <?php echo $row2['total'];?> &euro;
	  </div> 
  </blockquote>
  </div>
  <br><br>
  <div class="box">
  	<blockquote>
  		<?php echo $row['textocc'];?><br>
	    <?php echo $row['cc1'];?><br>
	    <?php echo $row['cc2'];?>
    </blockquote>
  </div>
</body>
</html>