<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>GODFALL</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/18.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Aperion está al borde de la ruina. Eres uno de los últimos caballeros valorianos, guerreros divinos capaces de usar las armaduras legendarias conocidas como Valorplates, que transforman a sus portadores en maestros imparables del combate cuerpo a cuerpo. Destroza a tus enemigos para avanzar por los reinos elementales y desafiar a Macros, el dios loco que espera en la cima. Asciende en Godfall, el primer RPG de acción looter-slasher centrado en el combate cuerpo a cuerpo.</p>

                <form method="post" class="formulario">
                <input type="hidden" id="ID" name="ID" value="18">
                        <input type="hidden" id="Juego" name="Juego" value="GODFALL">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="832.17">
                        <p class="producto__precio">Precio $832.17</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/18.jpg">
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
