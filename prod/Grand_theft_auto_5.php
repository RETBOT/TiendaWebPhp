<?php
include '../templates/includes.php'
?>

    <main class="contenedor">
        <h1>Grand Theft Auto 5</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/12.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Grand Theft Auto V: Edición Premium permite disfrutar por completo de la trama de Grand Theft Auto V, acceder gratuitamente al mundo en constante evolución de Grand Theft Auto Online y a todas las mejoras y contenidos existentes, como El Golpe del Fin del Mundo, Tráfico de armas, Contrabando, Motociclistas y mucho más. También se incluye el Pack de inicio Negocios criminales, la forma más rápida de dar un impulso a tu imperio criminal en Grand Theft Auto Online.</p>

                <form method="post" class="formulario">
                <input type="hidden" id="ID" name="ID" value="12">
                        <input type="hidden" id="Juego" name="Juego" value="Grand Theft Auto 5">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="599.00">
                        <p class="producto__precio">Precio $599.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/12.jpg">
                        <button class="formulario__submit" type="submit" value="Agregar" name="btnAccion">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </main>

<?Php 
include '../templates/pie.php';
?>
</body>
</html>
