<?php
require('css/formato.php');
require('css/menu.php');
$fonda_fila='';
$num = 0;
$consulta_fonda = new consultas_sql();
 $resultado = $consulta_fonda->mostrar_fondas();
                   if($resultado)
                   {
                        foreach ($resultado as $key => $fila) 
                        {
                            $num = $num + 1; 
                            $num = $num ++;
$fonda_fila .='<tr>
<td scope="row">'.$num.'</td>
<td scope="row">'.$fila['nombre'].'</td>
<td scope="row">$'.$fila['costo'].'.00</td>
<td scope="row">'.$fila['idfonda'].'</td>
<td scope="row"></td>
<td scope="row"><input type="submit" class="btn btn-primary btn-block" name="eliminar" value="Eliminar"></td>
</tr>';
                        }
                    }

require('vistas/fondas.php');
?>