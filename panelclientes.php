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

$consulta="select * FROM cliente";
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
$clientes=mysql_query($consulta);
?>


        <div class="panel-body">
          <?php
          if ($_REQUEST['insert']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-ok\"></span> <a href=\"fichacliente.php?id=".$_REQUEST['idcli']."\">Cliente</a> insertado correctamente!</div>";
          }
          if ($_REQUEST['del']=='ok') {
            echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-trash\"></span> Cliente eliminado correctamente!</div>";
          }


          ?>
          <h4>LISTADO DE CLIENTES</h4>
          <button type="button" class="btn btn-default btn-s"><a href="nuevocliente.php"><span class="glyphicon glyphicon-plus"></span>  Nuevo Cliente </a>
</button><br><br>
          <table data-toggle="table" data-cache="false" data-height="299">
          <tr><th>Nombre</th><th>Tel&eacute;fono</th><th>Acci&oacute;n</th><tr>
          <?php
          while ($row=mysql_fetch_array($clientes)) {
            echo "<tr><td>".$row['nombrefisc']."</td><td>".$row['telefono']."</td><td><a href=\"fichacliente.php?id=".$row['idcliente']."\" title=\"Ver ficha del cliente\"><span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span></a> <a href=\"editarcliente.php?id=".$row['idcliente']."\" title=\"Editar ficha del cliente\"><span class=\"glyphicon glyphicon-edit\"></span></a> <a href=\"eliminarcliente.php?id=".$row['idcliente']."\" title=\"Eliminar cliente\" onclick=\"return confirmar('¿Est&aacute; seguro de querer eliminar el cliente?')\"><span class=\"glyphicon glyphicon-trash\"></span></a></td></tr>";
          }
          ?>
          </table>
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
                <li><a href="clientes.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
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
            ?>       <li><a href="clientes.php?page=<?php echo $i;?>" ><?php echo $i;?></a></li><?php
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