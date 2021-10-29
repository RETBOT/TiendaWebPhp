<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Returnal</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/20.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Rompe el ciclo del caos en un planeta alienígena donde todo cambia constantemente.
                    <br>Tras un aterrizaje forzoso en este mundo cambiante, Selene debe explorar el paisaje desolado de una antigua civilización para escapar. Aislada y sola, tiene que pelear con uñas y dientes para sobrevivir, pero se ve derrotada una y otra vez, y no tiene más opción que volver a empezar su travesía cada vez que muere.</p>

                    <form method="post" class="formulario">
                    <input type="hidden" id="ID" name="ID" value="20">
                        <input type="hidden" id="Juego" name="Juego" value="Returnal">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="1499.99">
                        <p class="producto__precio">Precio $1,499.99</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/20.jpg">
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
