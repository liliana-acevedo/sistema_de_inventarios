<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsos L&L</title>

    <link rel="stylesheet" href="../Menu_Inventario/css/login-estilo.css">
</head>
<body>
    <nav>

        <div class="titulo">
            <h2>Bienvenido a bolsos L&L</h2>
        </div>

    
        <div class="inicio-secion">
            <h2>iniciar sesion</h2>
        </div>

        <div class = "php">
                <div >
                    <?php
                        include "backend_php/validacionUsuarioContraseña.php";
                        include "backend_php/conexion.php";
                    ?>
                </div>
        </div>    

        <form action="" method="POST" id="formularioLogin">
            <div class="usuario">
                <label for="nombre"></label>
                <input type="text" id="nombre" placeholder="usuario" name="usuario1" value="">
            </div>


            <div class="contraseña">
                <label for="contraseña"></label>
                <input type="password" id="contraseña" placeholder="contraseña" name="password1" value="">
            </div>

            <div class="boton-inicio">
                <button type="submit" id="boton" name="botonIngresar">iniciar secion</button>
            </div>

        </form>

    </nav>


</body>
</html>