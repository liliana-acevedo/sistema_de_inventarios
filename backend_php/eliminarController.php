<?php
include "backend_php/conexion.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $conexion->query("DELETE FROM inventario WHERE `inventario`.`id` = $id");
    

    if ($sql === TRUE) {
        echo '<div style="border: 2px solid red; color: red; margin: 10px; padding: 5px;">';
        echo '<div>Registro eliminado correctamente</div>';
        echo '</div>';
        echo '<script>setTimeout(function(){ window.location.href = "mostrarInventario.php"; }, 2000);</script>';
    } else {
        echo '<div>Error al eliminar registro</div>';
    }
}
?>


