<?php
include('inc/seguridad.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Generar Facturas</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<script>
function generarfacturas() {
	
	var primera = document.getElementById("primera").value;
	var plantillas='';
	for (i=1;i<document.form1.elements.length;i++){
    	if(document.form1.elements[i].type == "checkbox" && document.form1.elements[i].checked==1){
			plantillas=plantillas+document.form1.elements[i].value+";";
		}
	}
	window.location.href = "generarfacturasauto.php?primera="+primera+"&p="+plantillas;
}

function marcar(x){
	if (x==0){
		if (document.form1.todos.checked==1){
			for (i=1;i<document.form1.elements.length;i++)
     		if(document.form1.elements[i].type == "checkbox")
         	document.form1.elements[i].checked=1 
		}else{
			 for (i=1;i<document.form1.elements.length;i++)
     		 if(document.form1.elements[i].type == "checkbox")
        	 document.form1.elements[i].checked=0 
		}
	}else{
		if (document.form1.elements['ch'+x][0].checked==1){
			for (i=1;i<=document.form1.elements['ch'+x].length;i++)
     		document.form1.elements['ch'+x][i].checked=1
		}else{
			for (i=1;i<=document.form1.elements['ch'+x].length;i++)
     		document.form1.elements['ch'+x][i].checked=0
		}
	}
}

</script>
		
<?php include("inc/navegacion.php");?>

<header class="masthead">
  <div class="container">
<?php include("inc/cabecera.php");?>    
  </div>
  
  <div class="container">
	<div class="row">
      <div class="col col-sm-12">
        
        <div class="panel">
<?php include("panelgenerarfacturas.php");?>
        </div>
        
      </div>


  	</div>

  </div>
</header>

<!-- Body -->
<div class="container">

</div>



	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>