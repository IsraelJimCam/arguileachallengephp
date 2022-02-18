<?php
require('css/formato.php');
require('css/menu.php');
$platillo_fila='';
$num = 0;
$consulta_platillos = new consultas_sql();
 $resultado = $consulta_platillos->mostrar_platillos();
                   if($resultado)
                   {
                        foreach ($resultado as $key => $fila) 
                        {
                            $num = $num + 1; 
                            $num = $num ++;
$platillo_fila .='<tr>
<td hidden><input name="idplatillo[]" value="'.$fila['idplatillo'].'" /></td>
<td hidden><input name="idplatillo2['.$fila['idplatillo'].']" value="'.$fila['idplatillo'].'" /></td>
<td scope="row">'.$num.'</td>
<td scope="row">'.$fila['nombre'].'</td>
<td scope="row">$'.$fila['costo'].'.00</td>
<td scope="row">'.$fila['nombre_fonda'].'</td>
<td scope="row"><input type="submit" class="btn btn-info btn-block" name="detalle" value="Ver Detalle"></td>
<td scope="row"><input type="submit" class="btn btn-info btn-block" name="eliminar" value="Eliminar"></td>
</tr>';
                        }
                    }

        if(isset($_POST['eliminar']))
    {
      foreach ($_POST['idplatillo2'] AS $ids) 
      {
        $idsolicitud         = $_POST['idplatillo2'][$ids];
        include 'conexion/consultas.php';
      }
    } 
                    
require('vistas/platillos.php');
?>