<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/css">

    </script>
    <div class="botones-derecha">
    <a href="#"><i class="fa-solid fa-user" style="color: #03363d;"></i></a>
    <a href="login.php"><i class="fa-solid fa-right-to-bracket" style="color: #03363d;"></i></a>
      </div>
      
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsos L&L</title>

    <link rel="stylesheet" href="./css/estilos.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
<header>
<div class="icon__menu">
<i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-bag-shopping" ></i>
            <h4>Bolsos L&L</h4>
        </div>

        <div class="options__menu">	

            <a href="index.php" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="reposicion.php">
                <div class="option">
                <i class="fa-solid fa-cart-flatbed" title="reposicion"></i>
                    <h4>Reposicion</h4>
                </div>
            </a>
            
            <a href="stock.php">
                <div class="option">
                    <i class="fa-solid fa-table" title="Stocks"></i>
                    <h4>Stocks</h4>
                </div>
            </a>

            <a href="ventas.php">
                <div class="option">
                    <i class="fa-solid fa-file-invoice-dollar" title="Ventas"></i>
                    <h4>Ventas</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
    <h1>Agregar bolsos</h1><br>
    
    </main>

     <a href="buscar.php" class="botonFuncion"> 
     <i class="fa-solid fa-magnifying-glass"></i>Buscar</a>

     <a href="agregar.php" class="botonFuncion"> 
     <i class="fa-solid fa-plus"></i> Agregar Bolsos</a>

     <a href="mostrarInventario.php" class="botonFuncion"> 
     <i class="fa-solid fa-list"></i> Mostrar Inventario</a>

        <br>
        <br>

        <?php
            include "backend_php/conexion.php";
            include "backend_php/agregarController.php"
        ?>

        <form action="" method="post">
            <label for="id">ID del bolso</label>
                <input type="number" class="id" id="id" name="id">
                <br>

            <label for="cantidad">Cantidad</label>
                <input type="number" class="cantidad" id="cantidad" name="cantidad">
                <br>

                <label for="estado">Estado del bolso</label>
            <select id="estado" name="estado" class="estado">
             <option value="activo">Activo</option>
             <option value="stock">Stock</option>
            </select>
            <br>


            <label for="ubicacion">Ubicacion</label>
                <input type="number" class="ubicacion" id="ubicacion" name="ubicacion">
                <br>
            <button type="submit" class="boton1" name="btn" value="ok">Agregar al inventario</button>

        </form>


   



    <script src="js/script.js"></script>
</body>
</html>