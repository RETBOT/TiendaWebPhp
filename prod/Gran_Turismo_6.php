<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Gran Turismo 6</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/6.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Con este juego de Gran Turismo vas a disfrutar de horas de diversión y de nuevos desafíos que te permitirán mejorar como gamer.
                    <br>Interactúa con otros jugadores
                    <br>Podrás disfrutar de una experiencia inigualable, ya que te permite jugar con tus amistades y compartir momentos inolvidables.
                    <br>Diversión sin fronteras
                    <br>Podrás compartir cada juego con personas de todo el mundo, ya que es posible conectarse de manera online.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="6">
                        <input type="hidden" id="Juego" name="Juego" value="Gran Turismo 6">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="600.00">
                        <p class="producto__precio">Precio $600.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/6.jpg">
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
