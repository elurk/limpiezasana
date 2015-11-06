<?php

require_once('pdf/html2pdf.class.php');

include("inc/conexion.php");

$html="";

$facturas = explode(";", $_REQUEST['f']);
for ($i=0; $i < count($facturas)-1; $i++) { 


$sql="select * from empresa where idempresa=1";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$sql2="select * from factura where idfactura=".$facturas[$i];
$result2=mysql_query($sql2);
$row2=mysql_fetch_array($result2);

$sql3="select * from cliente where idcliente=".$row2['idcliente'];
$result3=mysql_query($sql3);
$row3=mysql_fetch_array($result3);

$html.="

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

hr{
	height: 0.5px;
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


<page>
<p>&nbsp;</p>
<blockquote>
  <br>
	<div class=\"header\"><img src=\"img/logoana.png\" width=\"114\" height=\"116\" />
  		<p>
		<h3> &nbsp;&nbsp;&nbsp;&nbsp;".$row['nombrecom']."</h3>
		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['nombrefisc'].": 15947403P<br>
		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['direccion']."<br>
		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>".$row['poblacion']."</u><br>
		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tlf: ".$row['telefono']."		  </p> 
	</div>
    <div class=\"customername\">
  	<p>
	  <h3>".$row3['nombrefisc']."</h3>
	  ".$row3['nombrecom']."<br>
	  ".$row3['direccion']."<br>
	  <u>".$row3['poblacion']."</u><br>
	  </p> 
	</div>
  </blockquote>
	  <p>&nbsp;</p>
  <div class=\"numfactura\">

	  <blockquote>&nbsp;&nbsp;N&uacute;mero Factura: ".$row2['numfactura']."<br>
	  &nbsp;&nbsp;Fecha Factura: ".$row2['fecha']."<br>
	  &nbsp;&nbsp;CIF: ".$row3['cif']."  
	  </blockquote>
  </div>
	<div class=\"box\">
		<blockquote>
    	".$row2['descripcion']."<br>
	  <div class=\"centered\">".$row2['horas']."</div><br>
	  <div class=\"centered\">
	  BASE IMPONIBLE ....................... ".$row2['base']."<br>
	  IVA 21 % (+) ................................. ".$row2['iva']."<br>
      <hr>
      TOTAL FACTURA ..................... ".$row2['total']."
	  </div> 
  </blockquote>
  </div>
  <br><br>
  <div class=\"box\">
  	<blockquote>".$row['textocc']."<br>
	    ".$row['cc1']."<br>
	    ".$row['cc2']."    </blockquote>
  </div>

</page>
 ";

}

$html2pdf = new HTML2PDF('P', 'A4', 'es');
$html2pdf->writeHTML($html);
//$html2pdf->Output('output/file_xxxx.pdf', 'F');
$html2pdf->Output('Facturas.pdf');

?>