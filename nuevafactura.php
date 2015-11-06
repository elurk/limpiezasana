<!DOCTYPE html>
<html lang="en">
	<head>
<?php include("inc/head.php");?>
	</head>
	<body>
<script>
function calculariva() {

    var base = document.getElementById("base").value;
    var ivaval = document.getElementById("ivavalue").value;
    var iva = document.getElementById("iva");
    var total= document.getElementById("total");
    var calciva = ((base * ivaval)/100);
    iva.value = calciva;
    total.value = parseFloat(calciva) + parseFloat(base);
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

<?php include("panelnuevafactura.php");?>
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
	</php>
</html>