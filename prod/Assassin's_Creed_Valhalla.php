<?php
include '../templates/includes.php'
?>

    <main class="contenedor">
        <h1>Assassin's Creed Valhalla</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/15.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Forja tu propia leyenda vikinga a 60 FPS y en resolución 4K con Xbox Series X.
                    <br>Ponte en la piel de Eivor, una leyenda vikinga criada entre historias de batallas y gloria. Explora un precioso mundo abierto y cambiante ambientado en la despiadada Inglaterra de los años oscuros. Saquea a tus enemigos, haz prosperar tu asentamiento y consolida tu poder político mientras luchas por ganarte un sitio entre los dioses en el Valhalla.</p>

                <form method="post" class="formulario">
                <input type="hidden" id="ID" name="ID" value="15">
                        <input type="hidden" id="Juego" name="Juego" value="Assassin's Creed Valhalla">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="499.50">
                        <p class="producto__precio">Precio $499.50</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/15.jpg">
                        <button class="formulario__submit" type="submit" value="Agregar" name="btnAccion" >Agregar al carrito</button>                </form>
            </div>
        </div>
    </main>

<?Php 
include '../templates/pie.php';
?>
    
</body>
</html>
