<!DOCTYPE html>
<html lang="en">

<script>

function eliminarfacturas() {
  
  var facturas='';
  for (i=1;i<document.form1.elements.length;i++){
      if(document.form1.elements[i].type == "checkbox" && document.form1.elements[i].checked==1){
      facturas=facturas+document.form1.elements[i].value+";";
    }
  }
  window.location.href = "eliminarfacturas.php?f="+facturas;
}

function generarpdffacturas() {
  
  var facturas='';
  for (i=1;i<document.form1.elements.length;i++){
      if(document.form1.elements[i].type == "checkbox" && document.form1.elements[i].checked==1){
      facturas=facturas+document.form1.elements[i].value+";";
    }
  }
  window.location.href = "generarpdf.php?f="+facturas;
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
	<head>
<?php include("inc/head.php");
include("inc/seguridad.php");
?>
	</head>
	<body>
<?php 
include("inc/navegacion.php");
?>

<header class="masthead">
  <div class="container">
<?php include("inc/cabecera.php");?>    
  </div>
  
  <div class="container">
	<div class="row">
      <div class="col col-sm-12">
        
        <div class="panel">
<?php include("panelfacturas.php");?>
        </div>
        
      </div>


  	</div>

  </div>
</header>

<!-- Body -->
<div class="container">

</div>



	<!-- script references -->
<?php include("inc/scripts.php");?>
	</body>
</html>