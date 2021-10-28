<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left 4 Dead</title>
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
        <h1>Left 4 Dead</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/13.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>De la mano de Valve®, creadores de Counter-Strike®, Half-Life® y otros muchos juegos, llega Left 4 Dead™, una nueva aventura para PC y Xbox 360 que te meterá en la piel de uno de los cuatro "supervivientes" que libran una pugna de proporciones épicas contra hordas de zombis y sus terroríficas variedades mutantes especiales.
                    <br>Ambientado justo tras el estallido del largamente anunciado Apocalipsis zombi, la dinámica de juego cooperativa de Left 4 Dead se desarrolla en cuatro extensas "películas" que transcurren en diversos entornos urbanos y rurales. Cada "película" tiene sus objetivos generales de equipo, consta de cinco grandes mapas y permite participar a entre uno y cuatro jugadores.
                    <br>Utiliza la nueva tecnología bautizada como "Director de IA" para generar por procedimiento una experiencia diferente cada vez que se juega. Al igual que en los filmes de Hollywood, el Director hace entrar en escenas nuevos monstruos, sonidos y escenas de acción según va ajustando la dinámica de la partida a la actuación del equipo.</p>

                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" value="1"> 
                    <p class="producto__precio">Precio $299.00</p>
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
