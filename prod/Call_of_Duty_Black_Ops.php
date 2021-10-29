<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Call of Duty: Black Ops</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/17.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>La saga de acción en primera persona más grande de todos los tiempos y la continuación del superventas del año pasado Call of Duty®: Modern Warfare 2 regresa en Call of Duty®: Black Ops.
                    <br>Call of Duty®: Black Ops te llevará más allá de las líneas enemigas como miembro de un equipo de fuerzas especiales de élite en misiones de guerra encubierta, operaciones secretas y conflictos explosivos por todo el planeta. Tendrás acceso al armamento y al equipo más exclusivos, esto te permitirá equilibrar la balanza durante la época más peligrosa que la humanidad ha conocido.</p>
                <form method="post" class="formulario">
                <input type="hidden" id="ID" name="ID" value="17">
                        <input type="hidden" id="Juego" name="Juego" value="Call of Duty: Black Ops">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="799.50">
                        <p class="producto__precio">Precio $799.50</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/17.jpg">
                        <button class="formulario__submit" type="submit" value="Agregar" name="btnAccion" >Agregar al carrito</button>                </form>
            </div>
        </div>
    </main>

<?Php 
include '../templates/pie.php';
?>
    
</body>
</html>
