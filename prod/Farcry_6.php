<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Far Cry 6</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/10.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Te damos la bienvenida a Yara, un paraíso tropical congelado en el tiempo. Como dictador de Yara, Antón Castillo (Giancarlo Esposito) está decidido a recuperar la antigua gloria de su nación por todos los medios junto a su hijo, Diego, quien siempre está obedientemente a su lado. Su gobierno opresivo ha prendido la mecha de la revolución.</p>

                <form method="post" class="formulario">
                        <input type="hidden" id="ID" name="ID" value="10">
                        <input type="hidden" id="Juego" name="Juego" value="Far Cry 6">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="1299.00">
                        <p class="producto__precio">Precio $1,299.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/10.jpg">
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
