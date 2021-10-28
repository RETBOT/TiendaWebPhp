<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returnal</title>
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

    <div>
        <?php 
        print_r($_POST);
        ?>
    </div>
    
    <main class="contenedor">
        <h1>Returnal</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/20.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Rompe el ciclo del caos en un planeta alienígena donde todo cambia constantemente.
                    <br>Tras un aterrizaje forzoso en este mundo cambiante, Selene debe explorar el paisaje desolado de una antigua civilización para escapar. Aislada y sola, tiene que pelear con uñas y dientes para sobrevivir, pero se ve derrotada una y otra vez, y no tiene más opción que volver a empezar su travesía cada vez que muere.</p>

                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" value="1"> 
                    <p class="producto__precio">Precio $1,499.99</p>
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
