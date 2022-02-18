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
<td scope="row">'.$fila['calle'].'</td>
<td scope="row">'.$fila['numero_exterior'].'</td>
<td scope="row">'.$fila['numero_interior'].'</td>
<td scope="row">'.$fila['municipio'].'</td>
<td scope="row">'.$fila['ciudad'].'</td>
<td scope="row">'.$fila['estado'].'</td>
<td scope="row">'.$fila['pais'].'</td>
<td scope="row"><input type="submit" class="btn btn-primary btn-block" name="eliminar" value="Eliminar"></td>
</tr>';
                        }
                    }

require('vistas/fondas.php');
?>