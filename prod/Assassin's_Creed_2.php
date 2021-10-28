<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assassin's Creed 2</title>
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
        <h1>Assassin's Creed 2</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/14.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Assassin's Creed® 2 es la secuela del título que se convirtió en la nueva IP con unas ventas más rápidas de la historia de los videojuegos. Este título tan largamente esperado introduce a un nuevo héroe, Ezio Auditore da Firenze, un joven noble italiano, y una nueva era, el Renacimiento.
                    <br>Assassin's Creed 2 mantiene la esencia de la jugabilidad que convirtió al primer juego en un éxito arrollador e introduce nuevas experiencias que sorprenderán y desafiarán a los jugadores.
                    <br>Assassin's Creed 2 es una historia épica de familia, venganza y conspiración que tiene lugar en el prístino, aunque brutal, trasfondo de una Italia renacentista. Ezio entabla amistad con Leonardo da Vinci, se enfrenta con las familias más poderosas de Florencia y se aventura por los canales de Venecia donde aprende a ser un maestro asesino.</p>

                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" value="1"> 
                    <p class="producto__precio">Precio $399.00</p>
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
