<?php 
include('conexion.php');

class consultas_sql
  {
    
    public $base_datos;
    
    public function __construct() { 
        
            $this->base_datos = new Basededatos();
        
  }
  public function mostrar_platillos(){

        $platillos = $this->base_datos->prepare('SELECT * FROM platillos');
    
        $platillos->execute();
    
        $fila = $platillos->fetchAll();
    
        return $fila;
    } 
    
    public function mostrar_fondas(){

        $fondas = $this->base_datos->prepare('SELECT * FROM fondas');
    
        $fondas->execute();
    
        $fila = $fondas->fetchAll();
    
        return $fila;
    }  

    public function mostrar_configuracion(){

        $configuracion = $this->base_datos->prepare('SELECT * FROM configuracion');
    
        $configuracion->execute();
    
        $fila = $configuracion->fetchAll();
    
        return $fila;
    }  
    
    public function guardar_usuario(){
             $insertar_usuario = $this->base_datos->prepare('INSERT INTO usuarios 
             VALUES (:id, :usuario, :contrasena, :nombre, :correo, :estatus, :fecha_creacion)');
             
                  $usuario        = $_REQUEST['usuario'];
                  $contrasena     = md5($_REQUEST['contrasena']);
                  $nombre         = $_REQUEST['nombre'];
                  $correo         = $_REQUEST['correo'];
                  $estatus        = 1;
                  $fecha_creacion = date('Y-m-d');
                  $id = ''; 
             
                  $insertar_usuario->execute(array(
                  ':id'             => $id,
                  ':usuario'        => $usuario,
                  ':contrasena'     => $contrasena,
                  ':nombre'         => $nombre,
                  ':correo'         => $correo,
                  ':estatus'        => $estatus,
                  ':fecha_creacion' => $fecha_creacion
              ));    
      
              
                  header('Location: ' . URL);  
               }
              
      
}
?>
