<?php
include "backend_php/conexion.php";

if (!empty($_POST["btn"])){
    if (!empty(($_POST['id'])) and !empty(($_POST['cantidad'])) and !empty(($_POST['estado'])) and !empty(($_POST['ubicacion']))){
        $id = $_POST['id'];
        $cantidad = $_POST['cantidad'];
        $estado = $_POST['estado'];
        $ubicacion = $_POST['ubicacion'];

        $sql = $conexion->query("INSERT INTO `inventario` (`idBolso`, `cantidad`, `estadoBolso`, `idAlmacen`) VALUES ('$id', '$cantidad', '$estado', '$ubicacion');");

        if ($sql == 1) {
            echo '<div style="border: 2px solid #20b72c; color: #20b72c; margin: 10px; padding: 5px;">Se ha registrado correctamente!</div>'; 
        } else {
            echo '<div style="border: 2px solid #FF0000; color: #FF0000; margin: 10px; padding: 5px;">No se pudo registrar</div>';
        }

    }else {
        echo '<div style="border: 2px solid #FF0000; color: #FF0000; margin: 10px; padding: 5px;">Debe llenar todos los campos</div>';
        }
}

?>