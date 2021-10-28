<?php
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Far Cry 6</title>
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

    <div>
        <?php 
        print_r($_POST);
        ?>
    </div>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="../index.html">Tienda</a>
        <a class="navegacion__enlace" href="../nosotros.html">Nosotros</a>
        <a class="navegacion__enlace" href="../carrito/carrito.php">Carrito</a>
    </nav>

    <main class="contenedor">
        <h1>Far Cry 6</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/10.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Te damos la bienvenida a Yara, un paraíso tropical congelado en el tiempo. Como dictador de Yara, Antón Castillo (Giancarlo Esposito) está decidido a recuperar la antigua gloria de su nación por todos los medios junto a su hijo, Diego, quien siempre está obedientemente a su lado. Su gobierno opresivo ha prendido la mecha de la revolución.</p>

                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" value="1"> 
                    <p class="producto__precio">Precio $1,299.00</p>
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
