<?php
require('css/formato.php');
require('css/menu.php');

/*function request_sepomex_api($criterio_busqueda){

    $endpoint_sepomex = "https://api.copomex.com/query/";
    $method_sepomex = 'info_cp/';
    $variable_string = '?type=simplified';
    $token = '&token=pruebas';

    $url = $endpoint_sepomex . $method_sepomex . $criterio_busqueda . $variable_string . $token;
    $response = file_get_contents($url);

    if($response){
        return $response;
    }else{
        return false;
    }

}
if(isset($_POST['codigo_postal'])) {
$codigo_postal =$_POST['codigo_postal'];
$response = request_sepomex_api($codigo_postal);

if($response){

    $response = json_decode($response);
    print_r($response);

}else{

    echo 'Ha ocurrido un error';

}*/
require('vistas/fonda_alta.php');
//}
?>
