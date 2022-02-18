<?php
require('css/formato.php');


if(isset($_REQUEST['usuario']))
{
    if(($_REQUEST['usuario']) && ($_REQUEST['contrasena']))
  {
$inicio = new consultas_sql();
$inicio->inicio_sesion();
  }
}

require('vistas/index.php');
?>