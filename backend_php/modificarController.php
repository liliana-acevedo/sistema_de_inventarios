<?php
include "backend_php/conexion.php";

    if (!empty($_POST["btnGuardar"])) 
    {
        if (!empty($_POST['id']) and !empty($_POST['idBolso']) and !empty($_POST['cantidad']) and !empty($_POST['estadoBolso']) and !empty($_POST['idAlmacen'])) 
        {
           $num =$_POST['id'];
           $id = $_POST['idBolso'];
           $cantidad = $_POST['cantidad'];
           $estado = $_POST['estadoBolso'];
           $ubicacion =$_POST['idAlmacen'];

           $sql = $conexion ->query("UPDATE `inventario` SET `id` = '$num', `idBolso` = '$id', `cantidad` = '$cantidad', `estadoBolso` = '$estado', `idAlmacen` = '$ubicacion' WHERE `inventario`.`id` = '$num';");

            if ($sql ==TRUE) {
                header("location:mostrarInventario.php");
            } else {
                echo "<div>Error al modificar</div>";
            }
            

        }else 
        {
            echo "<div>Los campos no pueden estar vacios</div>";
        }
    }




?>
