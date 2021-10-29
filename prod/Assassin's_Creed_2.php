<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Assassin's Creed 2</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/14.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Assassin's Creed® 2 es la secuela del título que se convirtió en la nueva IP con unas ventas más rápidas de la historia de los videojuegos. Este título tan largamente esperado introduce a un nuevo héroe, Ezio Auditore da Firenze, un joven noble italiano, y una nueva era, el Renacimiento.
                    <br>Assassin's Creed 2 mantiene la esencia de la jugabilidad que convirtió al primer juego en un éxito arrollador e introduce nuevas experiencias que sorprenderán y desafiarán a los jugadores.
                    <br>Assassin's Creed 2 es una historia épica de familia, venganza y conspiración que tiene lugar en el prístino, aunque brutal, trasfondo de una Italia renacentista. Ezio entabla amistad con Leonardo da Vinci, se enfrenta con las familias más poderosas de Florencia y se aventura por los canales de Venecia donde aprende a ser un maestro asesino.</p>

                <form method="post" class="formulario">
                <input type="hidden" id="ID" name="ID" value="14">
                    <input type="hidden" id="Juego" name="Juego" value="Assassin's Creed 2">
                    <p class="producto__precio">Cantidad</p>
                    <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                    <input type="hidden" id="Precio" name="Precio" value="399.00">
                    <p class="producto__precio">Precio $399.00</p>
                    <input type="hidden" id="Imagen" name="Imagen" value="../img/14.jpg">
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
