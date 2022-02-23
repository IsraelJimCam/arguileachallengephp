<?php 
include('conexion.php');

class consultas_sql
  {
    
    public $base_datos;
    
    public function __construct() { 
        
            $this->base_datos = new Basededatos();
        
  }
  public function mostrar_platillos(){

        $platillos = $this->base_datos->prepare('SELECT p.*, f.idfonda, f.nombre AS nombre_fonda FROM platillos p 
        INNER JOIN fondas f
        ON p.idfonda = f.idfonda');
    
        $platillos->execute();
    
        $fila = $platillos->fetchAll();
    
        return $fila;
    } 
    
    public function mostrar_fondas(){

        $fondas = $this->base_datos->prepare('SELECT * FROM fondas order by nombre');
    
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
    
    public function guardar_fonda(){
                $insertar_fonda = $this->base_datos->prepare('INSERT INTO fondas 
                VALUES (:idfonda, :nombre, :calle, :numero_exterior, :numero_interior, :codigo_postal, :colonia, :municipio, :ciudad, :estado, :pais, :fecha_creacion)');
                
                     $nombre               = $_REQUEST['nombre'];
                     $calle                = $_REQUEST['calle'];
                     $numero_exterior      = $_REQUEST['numero_exterior'];
                     $numero_interior      = $_REQUEST['numero_interior'];
                     $codigo_postal        = $_REQUEST['codigo_postal'];
                     $colonia              = $_REQUEST['colonia'];
                     $municipio            = $_REQUEST['municipio'];
                     $ciudad               = $_REQUEST['ciudad'];
                     $estado               = $_REQUEST['estado'];
                     $pais                 = $_REQUEST['pais'];
                     $fecha_creacion       = date('Y-m-d');
                     $idfonda = ''; 
                
                     $insertar_fonda->execute(array(
                     ':idfonda'            => $idfonda,
                     ':nombre'             => $nombre,
                     ':calle'              => $calle,
                     ':numero_exterior'    => $numero_exterior,
                     ':numero_interior'    => $numero_interior,
                     ':codigo_postal'      => $codigo_postal,
                     ':colonia'            => $colonia,
                     ':municipio'          => $municipio,
                     ':ciudad'             => $ciudad,
                     ':estado'             => $estado,
                     ':pais'               => $pais,
                     ':fecha_creacion'     => $fecha_creacion
                 ));
                 header('Location: ' . URL . 'fondas.php');   
                   
               }
               public function guardar_platillo(){
                $insertar_fonda = $this->base_datos->prepare('INSERT INTO platillos
                VALUES (:idplatillo, :nombre, :descripcion, :ingredientes, :costo, :idfonda, :categoria, :fecha_creacion)');
                
                     $nombre               = $_REQUEST['nombre'];
                     $descripcion          = $_REQUEST['descripcion'];
                     $ingredientes         = $_REQUEST['ingredientes'];
                     $costo                = $_REQUEST['costo'];
                     $idfonda              = $_REQUEST['fonda'];
                     $categoria            = $_REQUEST['categoria'];
                     $fecha_creacion       = date('Y-m-d');
                     $idplatillo = ''; 
                
                     $insertar_fonda->execute(array(
                     ':idplatillo'         => $idplatillo,
                     ':nombre'             => $nombre,
                     ':descripcion'        => $descripcion,
                     ':ingredientes'       => $ingredientes,
                     ':costo'              => $costo,
                     ':idfonda'            => $idfonda,
                     ':categoria'          => $categoria,
                     ':fecha_creacion'     => $fecha_creacion
                 ));
                 header('Location: ' . URL . 'platillos.php');   
                   
               }
      
}
?>
