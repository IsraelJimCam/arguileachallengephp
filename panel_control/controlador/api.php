<?php
// Datos
$token = 'pruebas';
$codigopostal = $_REQUEST['codigopostal'];

// Iniciar llamada a API
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'https://api.copomex.com/query/info_cp/'. $codigopostal .'?type=simplified&token=' . $token);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
echo $response;


?>