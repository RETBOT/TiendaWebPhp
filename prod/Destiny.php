<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Destiny</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/3.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>De los creadores de Halo® y los editores de Call of Duty®.
                    Destiny es un shooter en primera persona con una rica historia de corte cinematográfico ambientada en enormes mundos que podrás explorar. Crea y personaliza tu guardián. Derrota a tus enemigos. Conviértete en leyenda en intensos modos de juego cooperativos, competitivos y públicos.</p>

                <form method="post" class="formulario">
                    <input type="hidden" id="ID" name="ID" value="3">
                    <input type="hidden" id="Juego" name="Juego" value="Destiny">
                    <p class="producto__precio">Cantidad</p>
                    <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                    <input type="hidden" id="Precio" name="Precio" value="200.00">
                    <p class="producto__precio">Precio $200.00</p>
                    <input type="hidden" id="Imagen" name="Imagen" value="../img/3.jpg">
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
