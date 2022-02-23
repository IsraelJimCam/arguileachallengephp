<?php
require('css/formato.php');
require('css/menu.php');
$fonda_filas ="";
$consulta_fonda = new consultas_sql();
$resultado = $consulta_fonda->mostrar_fondas();

  foreach ($resultado as $key => $fila) 
         {
         	if(isset($_REQUEST['fonda']) && $_REQUEST['fonda']==$fila['idfonda'])
           $fonda_filas .='<option value="'. $fila['idfonda'] .'" selected>'.$fila['nombre'].'</option>';
           else
           $fonda_filas .='<option value="'. $fila['idfonda'] .'">'.$fila['nombre'].'</option>';
         }

if(isset($_REQUEST['guardar']))
{
    
if(($_REQUEST['nombre']) && ($_REQUEST['descripcion']) && ($_REQUEST['ingredientes']) && ($_REQUEST['costo']) && ($_REQUEST['fonda'] && ($_REQUEST['categoria'])))        
    {
     $guardar_platillo = new consultas_sql();
     $guardar_platillo->guardar_platillo();
    }
}

require('vistas/platillo_alta.php');
?>
