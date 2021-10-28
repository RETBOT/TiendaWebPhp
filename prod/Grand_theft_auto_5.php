<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Theft Auto 5</title>
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
        <h1>Grand Theft Auto 5</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/12.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Grand Theft Auto V: Edición Premium permite disfrutar por completo de la trama de Grand Theft Auto V, acceder gratuitamente al mundo en constante evolución de Grand Theft Auto Online y a todas las mejoras y contenidos existentes, como El Golpe del Fin del Mundo, Tráfico de armas, Contrabando, Motociclistas y mucho más. También se incluye el Pack de inicio Negocios criminales, la forma más rápida de dar un impulso a tu imperio criminal en Grand Theft Auto Online.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="Juego" name="Juego" value="Grand Theft Auto 5">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="599.00">
                        <p class="producto__precio">Precio $599.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/12.jpg">
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
