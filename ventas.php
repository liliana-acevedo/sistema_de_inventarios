<?php
$now = date("j-n-Y");
$conexion = mysqli_connect("localhost", "root", "");
$conn = mysqli_select_db($conexion, "bolsosl&l");

if (isset($_POST['send']) && $_POST['cantidad'] >= 1) {
    $id = $_POST['id'];
    $cant = $_POST['cantidad'];

    // Insertar venta
    $sql = "INSERT INTO ventas VALUES(NULL, $id, $cant, '$now')";
    $result = mysqli_query($conexion, $sql);

    // Actualizar inventario
    $sql = "SELECT * FROM inventario WHERE idBolso = $id";
    $result = mysqli_query($conexion, $sql);
    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $valor = $data['cantidad'];
    if ($valor >= $cant) {
        $su = $valor - $cant;
        $sql = "UPDATE inventario SET cantidad = $su WHERE idBolso = $id";
        $result = mysqli_query($conexion, $sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Bolsos L&L</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <!-- Resto del código HTML -->
</body>
</html>

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


    <div class="contenido">
        <form action="" method="post">
            <h1>ventas</h1>

            <label>id del bolso:</label>
<select name="id" id="" style="height: 6vh;width: 13vw;">
    <?php
        $sql = "SELECT * FROM inventario";
        $result = mysqli_query($conexion,$sql);
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
        foreach($rows as $row){
            echo "<option value='".$row['idBolso']."'>".$row['idBolso']."</option>";
        }
   ?>
</select>
<label style="display: inline-block;">Cantidad: </label>
<input type="number" name="cantidad" class="id" autocomplete="off" style="height:6vh; display: inline-block;">
<input type="submit" value="Guardar" class="boton1" name="send">

    </div>

    <table class="tabla">
    <thead>
        <tr>

            <td>Id producto</td>
            <td>Cantidad</td>
            <td>Fecha</td>
        </tr>
    </thead>
        <?php
        $sql = "SELECT * FROM ventas";
        $query = mysqli_query($conexion,$sql);
        $rows = mysqli_fetch_all($query,MYSQLI_ASSOC);
        
        foreach($rows as $row){
            echo "<tr>";

            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['cantidad']."</td>";
            echo "<td>".$row['fecha']."</td>";
            echo "</tr>";
        }

        ?>
    </table>



    <script src="js/script.js"></script>
</body>
</html>