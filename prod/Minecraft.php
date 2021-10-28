
<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft</title>
    <link rel="stylesheet" href="../css/normalize.css">
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
        <a class="navegacion__enlace navegacion__enlace--activo" href="../index.html">Tienda</a>
        <a class="navegacion__enlace" href="../nosotros.html">Nosotros</a>
        <a class="navegacion__enlace" href="../carrito/carrito.php">Carrito</a>
    </nav>

    <main class="contenedor">
        <h1>Minecraft</h1>
        <div class="juego">
            <img class="juego__imagen" src="../img/1.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Explora mundos generados al azar y construye cosas increíbles, desde la más humilde de las casas hasta el más majestuoso de los castillos. Juega en el modo creativo con recursos ilimitados o extrae en las profundidades del mundo, crea armas y armaduras para defenderte de enemigos peligrosos en el modo supervivencia.</p>
                    <form method="post" class="formulario">
                    <input type="hidden" id="Juego" name="Juego" value="Minecraft">
                    <p class="producto__precio">Cantidad</p>
                    <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                    <input type="hidden" id="Precio" name="Precio" value="349.00">
                    <p class="producto__precio">Precio $349.00</p>
                    <input type="hidden" id="Imagen" name="Imagen" value="../img/1.jpg">
                    <button class="formulario__submit" type="submit" value="Agregar">Agregar al carrito</button>
                    </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Roberto Esquivel Troncoso
                        <br> Oscar Martinez Ruiz
                        <br> - Todos los derechos Reservados 2022 -</p>
    </footer>
    
</body>
</html>
