<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Battlefield 4</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/8.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Battlefield 4™ es la superproducción de acción que redefine el género, creada a partir de momentos que borran la línea que separa un juego de la gloria. Alimentado por la potencia y la fidelidad de próxima generación de Frostbite™ 3, Battlefield 4™ proporciona una experiencia visceral y dramática sin igual. Sólo en Battlefield puedes demoler los edificios que protegen a tu enemigo. Sólo en Battlefield liderarás un asalto desde la parte trasera de una patrullera. Battlefield te ofrece la libertad para hacer más y ser más, mientras sacas partido a tus puntos fuertes y te abres camino hacia la victoria. Además del sello de su modo multijugador, Battlefield 4™ presenta una campaña intensa y dramática centrada en los personajes, que comienza con la evacuación de importantes personalidades estadounidenses de Shanghái y sigue los esfuerzos de tu pelotón para lograr volver a casa. No hay nada comparable. Sumérgete en el glorioso caos de la guerra total, sólo en Battlefield.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="8">
                        <input type="hidden" id="Juego" name="Juego" value="Battlefield 4">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="406.16">
                        <p class="producto__precio">Precio $406.16</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/8.jpg">
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
