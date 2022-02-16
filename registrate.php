<?php 
require('css/formato.php');
if(isset($_REQUEST['guardar']))
{
if(($_REQUEST['usuario']) && ($_REQUEST['contrasena']) && ($_REQUEST['nombre']) && ($_REQUEST['correo']))
  {
    $guardar_usuario = new consultas_sql();
    $guardar_usuario->guardar_usuario();
  } 
}
require('vistas/registrate.php');
?>