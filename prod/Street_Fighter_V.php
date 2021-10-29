<?php
include '../templates/includes.php'
?>
    
    <main class="contenedor">
        <h1>Street Fighter V</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/7.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Experimenta la intensidad de la batalla cara a cara en Street Fighter® V.Elige entre 16 personajes icónicos, cada uno con su propia historia personal y desafíos de entrenamiento únicos, y luego lucha contra amigos en línea o sin conexión con una sólida variedad de opciones para cada partida</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="7">
                        <input type="hidden" id="Juego" name="Juego" value="Street Fighter V">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="399.00">
                        <p class="producto__precio">Precio $399.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/7.jpg">
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
