<?php
require('css/formato.php');
require('css/menu.php');
if(isset($_REQUEST['guardar']))
{
    
if(($_REQUEST['nombre']) && ($_REQUEST['calle']) && ($_REQUEST['numero_exterior']) && ($_REQUEST['numero_interior']) && ($_REQUEST['colonia']) && ($_REQUEST['codigo_postal']) && ($_REQUEST['municipio']) && ($_REQUEST['ciudad']) && ($_REQUEST['estado']) && ($_REQUEST['pais']))        
    {
     $guardar_fonda = new consultas_sql();
     $guardar_fonda->guardar_fonda();
    }
}

require('vistas/fonda_alta.php');

?>
