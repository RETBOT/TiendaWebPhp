
<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>ARK</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/16.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Varado, desnudo, congelado y hambriento en una isla misteriosa, tendrás que cazar, cosechar, fabricar artículos, cultivar y construir refugios para sobrevivir. Usa tu astucia y destreza para matar, entrenar, criar y montar a los dinosaurios y criaturas primitivas que habitan ARK. Únete a cientos de jugadores en línea o intenta sobrevivir individualmente en una sesión offline.</p>

                <form method="post" class="formulario">
                    <input type="hidden" id="ID" name="ID" value="16">
                    <input type="hidden" id="Juego" name="Juego" value="ARK">
                    <p class="producto__precio">Cantidad</p>
                    <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                    <input type="hidden" id="Precio" name="Precio" value="529.00">
                    <p class="producto__precio">Precio $529.00</p>
                    <input type="hidden" id="Imagen" name="Imagen" value="../img/16.jpg">
                    <button class="formulario__submit" type="submit" value="Agregar" name="btnAccion" >Agregar al carrito</button>                </form>
            </div>
        </div>
    </main>

<?Php 
include '../templates/pie.php';
?>

</body>
</html>
