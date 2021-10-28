<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call of Duty: Black Ops</title>
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
        <h1>Call of Duty: Black Ops</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/17.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>La saga de acción en primera persona más grande de todos los tiempos y la continuación del superventas del año pasado Call of Duty®: Modern Warfare 2 regresa en Call of Duty®: Black Ops.
                    <br>Call of Duty®: Black Ops te llevará más allá de las líneas enemigas como miembro de un equipo de fuerzas especiales de élite en misiones de guerra encubierta, operaciones secretas y conflictos explosivos por todo el planeta. Tendrás acceso al armamento y al equipo más exclusivos, esto te permitirá equilibrar la balanza durante la época más peligrosa que la humanidad ha conocido.</p>
                <form method="post" class="formulario">
                        <input type="hidden" id="Juego" name="Juego" value="Call of Duty: Black Ops">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="799.50">
                        <p class="producto__precio">Precio $799.50</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/17.jpg">
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
