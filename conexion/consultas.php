<?php 
include('conexion.php');
include('clases/sesiones.php'); 

class consultas_sql
  {
    
    public $base_datos;
    
    public function __construct() { 
        
            $this->base_datos = new Basededatos();
        
  }

  public function inicio_sesion()
  {
     
     $contra= md5($_REQUEST['contrasena']);
     
     $usuarios = $this->base_datos->prepare('SELECT * FROM usuarios  
     WHERE usuario = :usuario AND contrasena = :contrasena');

    $usuarios->execute(array(
              ':usuario'    => $_REQUEST['usuario'],
              ':contrasena' => $contra
    ));
    
    $fila = $usuarios->fetch();

    $contador = $usuarios->rowCount();
    
    if($contador > 0){
        $varsesion = new sesiones();
        $varsesion->iniciar();
        $varsesion->set('usuario', $fila['usuario']);
        $_SESSION['id'] = $fila['id'];
        $_SESSION['usuario'] = $fila['usuario'];
           
                   header('location: ' . URL . 'panel_control/');
            
        }
         elseif($contador == 0)
        {
        }
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
