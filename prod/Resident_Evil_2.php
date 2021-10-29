<?php
include '../templates/includes.php'
?> 
    <main class="contenedor">
        <h1>Resident Evil 2</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/2.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Publicado originalmente en 1998, Resident Evil 2, uno de los juegos más icónicos de todos los tiempos, regresa completamente reinventado para las consolas de nueva generación.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="2">
                        <input type="hidden" id="Juego" name="Juego" value="Resident Evil 2">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="448.20">
                        <p class="producto__precio">Precio $448.20</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/2.jpg">
                        <button class="formulario__submit" type="submit" value="Agregar" name="btnAccion">Agregar al carrito</button>
                </form>

            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">VIDEO GAME STORE - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>
