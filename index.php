<?php session_start(); 
include("inc/head.php");
?>

<body>


	<!--login modal--><br>
<div class="site-wrapper" style="width:800px; margin:0 auto;">
    <div class="site-wrapper-inner">
        <div class="cover-container">          
         	<div class="inner cover">
    
          		<h1 class="text-center"><img src="img/logoana.png" alt="logotipo de LIMPIEZAS ANA" /></h1>
<br>
	            <form class="form center-block" action="clientes.php" method="POST">
	          

<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" class="form-control" placeholder="Usuario" name="name">
  
</div><br>

<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-certificate"></span></span>
  <input type="password" class="form-control" placeholder="Contrase&ntilde;a" name="pass">
  
</div><br>

	            
	                <div class="form-group">
	                  <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
	                </div>
	            </form>

	              
                <?php if (isset($_REQUEST['log'])) {
	            	echo "
	            		<div class=\"panel panel-danger\">
            				<div class=\"panel-body\">Error en usuario o contrase&ntilde;a
            				</div>
		                </div>
		                ";				                
				}?>

	            

	        </div>
	    </div>
	</div>
</div>
<!--/login modal-->


</body>
</html>