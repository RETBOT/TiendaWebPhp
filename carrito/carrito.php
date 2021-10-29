<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Games Store</title>
    <link rel="stylesheet" href="..css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icono.png">
</head>
<body>
    <header class="header">
        <a href="../index.html">
            <img class="header__logo" src="../img/logo.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="../index.php">Tienda</a>
        <a class="navegacion__enlace" href="../nosotros.php">Nosotros</a>
        <a class="navegacion__enlace" href="Carrito.php">Carrito</a>
    </nav>
    <main class="contenedor">
        <h1>Productos</h1>
        <div class="grid">
        <?php
          $sentencia=$pdo->prepare("Select * from tblproductos");
          $sentencia->execute();
          $listProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
         ?>
        <?php foreach($listProductos as $producto){ ?>
            <div class="producto">
                <a href="../prod/<?php echo $producto['Nombre'] ?>.php">
                    <img class="producto__imagen" src="<?php echo $producto['Imagen'] ?>" alt="imagen juego">
                    <div class="producto__informacion">
                        <p class="producto__nombre"><?php echo $producto['Nombre'] ?></p>
                        <?php $precio = $producto['Precio']*$producto['Cantidad']?>
                        <p class="producto__precio">$<?php echo $precio ?></p>
                        <p class="producto__precio">Cantidad: <?php echo $producto['Cantidad'] ?></p>
                    </div>
                </a>
            </form>
            </div>  <!--.producto-->
        <?php } ?> 
        </div>
    </main>

<?Php 
include '../templates/pie.php';
?>
    
</body>
</html>