<?php

if(isset($_GET['page']))
{
    $page= $_GET['page'];
}
else
{
    //SI NO DIGO Q ES LA PRIMERA PÁGINA
    $page=1;
}

$consulta="select idfactura,numfactura,fecha,nombrefisc from factura,cliente where factura.idcliente=cliente.idcliente order by idfactura desc";
$datos=mysql_query($consulta);

$num_rows=mysql_num_rows($datos);

$rows_per_page= 20;

$lastpage= ceil($num_rows / $rows_per_page);

//COMPRUEBAR QUE EL VALOR DE LA PÁGINA SEA CORRECTO Y SI ES LA ULTIMA PÁGINA
$page=(int)$page;
 
if($page > $lastpage)
{
    $page= $lastpage;
}
 
if($page < 1)
{
    $page=1;
}

$limit= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;


$consulta .=" $limit";
$facturas=mysql_query($consulta);
?>

        <div class="panel-body">
          <?php
          if ($_REQUEST['insert']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-ok\"></span> <a href=\"detallefactura.php?id=".$_REQUEST['idfact']."\">Factura</a> insertada correctamente!</div>";
          }
          if ($_REQUEST['del']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-trash\"></span> Factura eliminada correctamente!</div>";
          }

          if ($_REQUEST['delvar']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-trash\"></span> Facturas eliminadas correctamente!</div>";
          }

          if ($_REQUEST['gen']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-ok\"></span> Facturas generadas correctamente!</div>";
          }        

          
        
          ?>
          <h4>LISTADO DE FACTURAS</h4>
          <button type="button" class="btn btn-default btn-s"><a href="nuevafactura.php"><span class="glyphicon glyphicon-plus"></span>  Nueva Factura </a>
</button><br><br>
 <form id="form1" name="form1" method="POST" action="">
 <input type="checkbox" name="todos" id="todos" value="" onchange="javascript:marcar(0)"/>
      Marcar/Desmarcar todas  &nbsp;<button type="button" class="btn btn-default btn-s" onclick="generarpdffacturas()">Generar PDF de Facturas</button> <button type="button" class="btn btn-default btn-s" onclick="eliminarfacturas()">Eliminar Facturas</button><br><br>

          <table data-toggle="table" data-cache="false" data-height="299">
          <tr><th></th><th>Nº Factura</th><th>Fecha Factura</th><th>Cliente</th><th>Acci&oacute;n</th><tr>
          <?php
          while ($row=mysql_fetch_array($facturas)) {
            echo "<tr><td><input type=\"checkbox\" value=\"".$row['idfactura']."\"></td><td>".$row['numfactura']."</td><td>".$row['fecha']."</td><td>".$row['nombrefisc']."</td><td><a href=\"detallefactura.php?id=".$row['idfactura']."\" title=\"Ver detalles de factura\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a> <a href=\"editarfactura.php?id=".$row['idfactura']."\" title=\"Editar factura\"><span class=\"glyphicon glyphicon-edit\"></span></a> <a href=\"eliminarfactura.php?id=".$row['idfactura']."\" title=\"Eliminar factura\" onclick=\"return confirmar('¿Est&aacute; seguro de querer eliminar la factura?')\"><span class=\"glyphicon glyphicon-trash\"></span></a></td></tr>";
          }
          ?>
          </table>
  </form>        
          <nav>
<?php

    if($numrows != 0){
       $nextpage= $page +1;
       $prevpage= $page -1;
    }
?><ul class="pagination"><?php



  if ($page == 1) 
           {
            ?>
              
             <li class="active"><a>1</a></li>
         <?php
              for($i= $page+1; $i<= $lastpage ; $i++)
              {?>
                <li><a href="facturas.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php }
           
           //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
            if($lastpage >$page )
            {?>      
                <?php
            }
            else
            {?>
                
        <?php
            }
        } else
        {
     
            //EN CAMBIO SI NO ESTAMOS EN LA PÁGINA UNO HABILITO EL BOTON DE PREVIUS Y MUESTRO LAS DEMÁS
        ?>
            </li><?php
             for($i= 1; $i<= $lastpage ; $i++)
             {
                           //COMPRUEBO SI ES LA PÁGINA ACTIVA O NO
                if($page == $i)
                {
            ?>       <li class="active"><a><?php echo $i;?></a></li><?php
                }
                else
                {
            ?>       <li><a href="facturas.php?page=<?php echo $i;?>" ><?php echo $i;?></a></li><?php
                }
            }
             //Y SI NO ES LA ÚLTIMA PÁGINA ACTIVO EL BOTON NEXT     
            if($lastpage >$page )
            {   ?>   
                <?php
            }
            else
            {
        ?>       <?php
            }
        }     
    ?></ul>



</nav>
        </div>