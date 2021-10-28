<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forza motorsport 6</title>
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
    </nav>

    <main class="contenedor">
        <h1>Forza motorsport 6</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/5.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Forza Motorsport 6 es la acción incesante a velocidad de simulación en el juego de carreras más hermoso y completo de esta generación. Colecciona, personaliza y pilota más de 450 coches Forzavista™ con cabinas funcionales y daños realistas. Compite en carreras épicas para 24 jugadores en 26 emplazamientos de fama mundial. Domina el clima lluvioso y las carreras nocturnas en tu camino a la victoria.</p>

                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" value="1"> 
                    <p class="producto__precio">Precio $800.00</p>
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
