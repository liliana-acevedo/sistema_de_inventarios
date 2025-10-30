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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
        <h1>Stock de inventario</h1><br>
    
    </main>

    <table class ="tabla">
        <thead>
            <tr>
                <th>Id bolsos</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Ubicacion</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <?php
        include "backend_php/stockController.php";
        ?>
     

    <script src="js/script.js"></script>
</body>
</html>