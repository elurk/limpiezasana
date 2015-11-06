
<?php include ("conexion.php");?>

<nav class="navbar navbar-static">
    <div class="container">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
      <div class="nav-collapse collase">
        <ul class="nav navbar-nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes</a>
            <ul class="dropdown-menu">
              <li><a href="clientes.php">Listado Clientes</a></li>
              
              <li class="divider"></li>
              <li><a href="nuevocliente.php">Nuevo CLiente</a></li>
             </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facturas</a>
            <ul class="dropdown-menu">
              <li><a href="facturas.php">Listado Facturas</a></li>
              <li class="divider"></li>
              <li><a href="nuevafactura.php">Nueva Factura</a></li>
              <li class="divider"></li>
              <li><a href="generarfacturas.php">Generar Facturas</a></li>
             </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><?php echo $_SESSION['name'];?></a></li>
              <li class="divider"></li>
              <li><a href="inc/cerrarsesion.php">Cerrar Sesión</a></li>
             </ul>
          </li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          	
            
        </ul>
      </div>		
    </div>
</nav><!-- /.navbar -->