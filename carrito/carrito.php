<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/session.php';
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
        <a href="../index.php">
            <img class="header__logo" src="../img/logo.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="../index.php">Tienda</a>
        <a class="navegacion__enlace" href="../nosotros.php">Nosotros</a>
        <a class="navegacion__enlace" href="Carrito.php">Carrito (<?php 
            echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
        ?>)</a>
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
        <center></center><h3>
        <?php if(!empty( $_SESSION['CARRITO'])) { ?>
        <table style="border-collapse: collapse;" border="1"; width="520">
                    <tr>
                        <th width="100%">Imagen</th>
                        <th width="30%">Juego</th>
                        <th width="15%">Cantidad</th>
                        <th width="20%">Precio</th>
                        <th width="20%">Total</th>
                        <th width="5%">--</th>
                    </tr>
                    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
                    <tr>
                        <td width="100%"><img class="producto__imagen" src="<?php echo $producto['Imagen'] ?>" alt="imagen juego"></td>
                        <td width="30%"><?php echo $producto['Juego'] ?></td>
                        <td width="15%"><?php echo $producto['Cantidad'] ?></td>
                        <td width="20%"><?php echo $producto['Precio'] ?></td>
                        <td width="20%"><?php echo $producto['Precio']*$producto['Cantidad'] ?></td>
                        <td width="5%"><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="4" align="right">Total</td>
                        <td align="right"><?php echo number_format(300,2);?></td>
                        <td></td>
                    </tr>
            </table></h3>
            <?php } else { ?>
                <div class="alert alert-succes">
                    No hay productos en el carrito..
                </div>
            <?php } ?>
        </div>
    </main>

<?Php 
include '../templates/pie.php';
?>
    
</body>
</html>