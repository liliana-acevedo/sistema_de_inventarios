<?php
include "conexion.php";

if (!empty($_POST['btnBuscar']))
{
    if (!empty($_POST['idBolso'])) 
    {
        $idBolso = $_POST['idBolso'];

        $buscar = $conexion -> query("SELECT * FROM `inventario` WHERE idBolso = $idBolso;");

        if ($buscar->num_rows > 0) {
            while ($fila = $buscar->fetch_assoc()) 
            {
                echo "<tbody>
                        <tr>
                            <td>".$fila['idBolso']." </td> 
                            <td>".$fila['cantidad']."</td>
                            <td>".$fila['estadoBolso']."</td>
                            <td>".$fila['idAlmacen']."</td>
                            <td><a href=\"modificar.php?id=".$fila['id']."\"><i class=\"fa-solid fa-pen-to-square\" style=\"color: #03363D; margin-left: 30px;\"></i></a></td>
                            <td><a href=\"mostrarInventario.php?id=".$fila['id']."\"><i class=\"fa-solid fa-trash-can\" style=\"color: #03363D; margin-left: 30px;\"></i></a></td>
                        </tr>
                    </tbody>"; 
            }
        } else {
            echo '<div style="border: 2px solid #FF0000; color: #FF0000; margin: 10px; padding: 5px;">El producto no existe</div>';
        }
        
    } else 
    {
        echo '<div style="border: 2px solid #FF0000; color: #FF0000; margin: 10px; padding: 5px;">Debe escribir el id del bolso en el buscador</div>';
        
    }
}



?>