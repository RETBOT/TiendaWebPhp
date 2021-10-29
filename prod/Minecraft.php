
<?php
include '../templates/includes.php';
?>
    <main class="contenedor">
        <h1>Minecraft</h1>
        <div class="juego">
            <img class="juego__imagen" src="../img/1.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Explora mundos generados al azar y construye cosas increíbles, desde la más humilde de las casas hasta el más majestuoso de los castillos. Juega en el modo creativo con recursos ilimitados o extrae en las profundidades del mundo, crea armas y armaduras para defenderte de enemigos peligrosos en el modo supervivencia.</p>
                    <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="1">
                        <input type="hidden" id="Juego" name="Juego" value="Minecraft">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="349.00">
                        <p class="producto__precio">Precio $349.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/1.jpg">
                        <button class="formulario__submit" type="submit" value="Agregar" name="btnAccion" >Agregar al carrito</button>
                    </form>
            </div>
        </div>
    </main>

<?Php 
include '../templates/pie.php';
?>
</body>
</html>
