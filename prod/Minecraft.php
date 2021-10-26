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
        <a class="navegacion__enlace" href="carrito/carrito.php">Carrito</a>
    </nav>

    <main class="contenedor">
        <h1>Minecraft</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/1.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Explora mundos generados al azar y construye cosas increíbles, desde la más humilde de las casas hasta el más majestuoso de los castillos. Juega en el modo creativo con recursos ilimitados o extrae en las profundidades del mundo, crea armas y armaduras para defenderte de enemigos peligrosos en el modo supervivencia.</p>

                <form action="../carrito/carrito.php" method="get" class="formulario">
                    <input type="hidden" name="Juego" value="Minecraft">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" name="Cantidad" value="1" > 
                    <p class="producto__precio">Precio $349.00</p>
                    <input type="hidden" name="Precio" value="349">
                    <input type="hidden" name="Imagen" value="1">
                    <input class="formulario__submit" type="submit" value="Agregar al Carrito">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">VIDEO GAME STORE - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>
