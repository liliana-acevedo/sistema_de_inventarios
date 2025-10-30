<?php
include "conexion.php";

$sql = "SELECT * FROM inventario";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    // Imprimir los datos
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tbody>
        <tr>
            <td>".$row['idBolso']."</td> 
            <td>".$row['cantidad']."</td>
            <td>".$row['estadoBolso']."</td>
            <td>".$row['idAlmacen']."</td>
            <td><a href=\"modificar.php?id=".$row['id']."\"><i class=\"fa-solid fa-pen-to-square\" style=\"color: #03363D; margin-left: 30px;\"></i></a></td>
            <td><a href=\"mostrarInventario.php?id=".$row['id']."\"><i class=\"fa-solid fa-trash-can\" style=\"color: #03363D; margin-left: 30px;\"></i></a></td>
        </tr>
    </tbody>";
    }
} else {
    echo "No se encontraron registros.";
}
?>

    



