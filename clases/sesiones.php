<?php
class sesiones{

    public function iniciar(){
	@session_start();
    }


    public function set($varname, $value){		
       $_SESSION['usuario'] = $value;	
   }
    public function get($varname){            
       return $_SESSION[$varname];            
    }	
    public function destruir(){		
    session_unset();
	session_destroy();		
    }	
} 