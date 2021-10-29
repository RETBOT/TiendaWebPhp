<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Forza motorsport 6</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/5.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Forza Motorsport 6 es la acción incesante a velocidad de simulación en el juego de carreras más hermoso y completo de esta generación. Colecciona, personaliza y pilota más de 450 coches Forzavista™ con cabinas funcionales y daños realistas. Compite en carreras épicas para 24 jugadores en 26 emplazamientos de fama mundial. Domina el clima lluvioso y las carreras nocturnas en tu camino a la victoria.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="5">
                        <input type="hidden" id="Juego" name="Juego" value="Forza motorsport 6">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="800.00">
                        <p class="producto__precio">Precio $800.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/5.jpg">
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
