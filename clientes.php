<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
<?php 
include("inc/login.php");
include("inc/head.php");?>
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
<?php include("panelclientes.php");?>
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