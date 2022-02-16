<?php 
date_default_timezone_set('America/Mexico_City');
  class fechasis
  {
 public static function fechaespaniol($fechaActual) 
    {
  $fechaActual = substr($fechaActual, 0, 10);
  $numeroDia = date('d', strtotime($fechaActual));
  $dia = date('l', strtotime($fechaActual));
  $mes = date('F', strtotime($fechaActual));
  $anio = date('Y', strtotime($fechaActual));
  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
  return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
    }   
}

function calculaEdad($fecha_actual,$fecha_nacimiento){

  $datetime1 = date_create($fecha_actual);
  $datetime2 = date_create($fecha_nacimiento);
  $interval = date_diff($datetime1, $datetime2);
  
  $tiempo=array();

  foreach ($interval as $valor) {
    $tiempo[]=$valor;
  }

  return $tiempo;
}
?>