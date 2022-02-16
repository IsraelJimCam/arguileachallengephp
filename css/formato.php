<?php
include('librerias/fecha.php');
include('conexion/url.php');
include('conexion/consultas.php');
$consulta_configuracion = new consultas_sql();
$resultado = $consulta_configuracion->mostrar_configuracion();
if($resultado)
{ foreach ($resultado as $key => $fila) 
   { 
       $titulo = $fila['titulo'];
       $pie    = $fila['pie'];
   }
} 
$fechaActual = date('d-m-Y H:i:s'); 
$hora = date('H:i');
$fecha = fechasis::fechaespaniol($fechaActual);
$pie_pagina = $pie . ' | ' .  $fecha . '  '.$hora. '  hrs.';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title><?php echo $titulo; ?></title>
  </head>
    <body>
      <footer>
               <center><h4><?php echo $pie_pagina;?></h4></center>
      </footer>
    </body>
</html>