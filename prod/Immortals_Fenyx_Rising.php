<?php
include '../templates/includes.php'
?>

    <main class="contenedor">
        <h1>Immortals Fenyx Rising</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/9.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Immortals Fenyx Rising™ trae consigo una gran aventura mitológica. Juega como Fenyx, quien tiene la misión de salvar a los dioses griegos.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="9">
                        <input type="hidden" id="Juego" name="Juego" value="Immortals Fenyx Rising">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="479.60">
                        <p class="producto__precio">Precio $479.60</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/9.jpg">
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
