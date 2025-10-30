<link rel="stylesheet" href="../Menu_Inventario/css/login-estilo.css">

<?php
include "backend_php/conexion.php";


@$usuario1 = $_POST["usuario1"];

@$password1= $_POST["password1"];

$sql = $conexion;

$sql = "SELECT * FROM `usuarios` WHERE `usuario` = '$usuario1' AND `password` = '$password1'";

$datos = $conexion->query($sql);


if (empty($_POST['botonIngresar'])) {
   if (empty($usuario1) && empty($password1)) {


   }else{

      if ($datos->fetch_object()) {
         header("location:./index.php");
      
      }else{
         echo '<div class="mensaje">Aceso negado</div>';
      }
   }

}


?>