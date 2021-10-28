<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Coaster</title>
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
        <h1>Planet Coaster</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/19.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Sorprended, deleitad y emocionad a las masas con el parque temático de vuestros sueños. Construid y diseñad impresionantes parques de atracciones prestando atención hasta al más mínimo detalle y gestionadlo para hacer que cobre vida.
                    <br>Construcción pieza a pieza: Planet Coaster convierte a cualquiera en un diseñador. Coloca rutas, construye paisajes, personaliza atracciones y haz que todo en tu parque sea único gracias a la construcción pieza a pieza y a más de mil componentes de edificios.
                    <br>Modelado del terreno: Juega con la naturaleza y dale nueva forma a la tierra que pisas. Modela el terreno para elevar montañas, formar lagos, horadar cavernas y hasta construir islas en el cielo. Después haz pasar las montañas rusas a través de tu parque por encima y por debajo del nivel del suelo.
                    <br>Absoluta verosimilitud: Recrea tus atracciones favoritas o deja a un lado el mundo real. Juegues como juegues, las atracciones más realistas y las reacciones más realistas de los visitantes hacen de Planet Coaster el simulador más auténtico de la historia.</p>

                    <form method="post" class="formulario">
                        <input type="hidden" id="Juego" name="Juego" value="Planet Coaster">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="675.00">
                        <p class="producto__precio">Precio $675.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/19.jpg">
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
