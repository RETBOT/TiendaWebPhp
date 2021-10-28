<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARK</title>
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
        <h1>ARK</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/16.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Varado, desnudo, congelado y hambriento en una isla misteriosa, tendrás que cazar, cosechar, fabricar artículos, cultivar y construir refugios para sobrevivir. Usa tu astucia y destreza para matar, entrenar, criar y montar a los dinosaurios y criaturas primitivas que habitan ARK. Únete a cientos de jugadores en línea o intenta sobrevivir individualmente en una sesión offline.</p>

                <form method="post" class="formulario">
                    <input type="hidden" id="Juego" name="Juego" value="ARK">
                    <p class="producto__precio">Cantidad</p>
                    <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                    <input type="hidden" id="Precio" name="Precio" value="529.00">
                    <p class="producto__precio">Precio $529.00</p>
                    <input type="hidden" id="Imagen" name="Imagen" value="../img/16.jpg">
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
