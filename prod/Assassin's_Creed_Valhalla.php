<?php
include '../global/config.php';
include '../global/conexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assassin's Creed Valhalla</title>
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
        <h1>Assassin's Creed Valhalla</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/15.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Forja tu propia leyenda vikinga a 60 FPS y en resolución 4K con Xbox Series X.
                    <br>Ponte en la piel de Eivor, una leyenda vikinga criada entre historias de batallas y gloria. Explora un precioso mundo abierto y cambiante ambientado en la despiadada Inglaterra de los años oscuros. Saquea a tus enemigos, haz prosperar tu asentamiento y consolida tu poder político mientras luchas por ganarte un sitio entre los dioses en el Valhalla.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="Juego" name="Juego" value="Assassin's Creed Valhalla">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="499.50">
                        <p class="producto__precio">Precio $499.50</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/15.jpg">
                        <button class="formulario__submit" type="submit" value="Agregar">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">VIDEO GAME STORE - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>
