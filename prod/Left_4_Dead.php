<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Left 4 Dead</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/13.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>De la mano de Valve®, creadores de Counter-Strike®, Half-Life® y otros muchos juegos, llega Left 4 Dead™, una nueva aventura para PC y Xbox 360 que te meterá en la piel de uno de los cuatro "supervivientes" que libran una pugna de proporciones épicas contra hordas de zombis y sus terroríficas variedades mutantes especiales.
                    <br>Ambientado justo tras el estallido del largamente anunciado Apocalipsis zombi, la dinámica de juego cooperativa de Left 4 Dead se desarrolla en cuatro extensas "películas" que transcurren en diversos entornos urbanos y rurales. Cada "película" tiene sus objetivos generales de equipo, consta de cinco grandes mapas y permite participar a entre uno y cuatro jugadores.
                    <br>Utiliza la nueva tecnología bautizada como "Director de IA" para generar por procedimiento una experiencia diferente cada vez que se juega. Al igual que en los filmes de Hollywood, el Director hace entrar en escenas nuevos monstruos, sonidos y escenas de acción según va ajustando la dinámica de la partida a la actuación del equipo.</p>

                <form method="post" class="formulario">
                <input type="hidden" id="ID" name="ID" value="13">
                        <input type="hidden" id="Juego" name="Juego" value="Left 4 Dead">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="299.00">
                        <p class="producto__precio">Precio $299.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/13.jpg">
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
