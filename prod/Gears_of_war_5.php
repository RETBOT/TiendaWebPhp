<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Gears of war 5</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/11.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Gears 5 se ha renovado por completo. Consigue esta aclamada campaña, el modo multijugador recargado y la expansión de la campaña Hivebuster como parte de Game of the Year Edition.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="11">
                        <input type="hidden" id="Juego" name="Juego" value="Gears of war 5">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="599.60">
                        <p class="producto__precio">Precio $599.60</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/11.jpg">
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
