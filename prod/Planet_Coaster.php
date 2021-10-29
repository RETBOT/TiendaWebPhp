<?php
include '../templates/includes.php'
?>
    <main class="contenedor">
        <h1>Planet Coaster</h1>

        <div class="juego">
            <img class="juego__imagen" src="../img/19.jpg" alt="Imagen del Producto">
            <div class="juego__contenido">
                <p>Sorprended, deleitad y emocionad a las masas con el parque temático de vuestros sueños. Construid y diseñad impresionantes parques de atracciones prestando atención hasta al más mínimo detalle y gestionadlo para hacer que cobre vida.
                    <br>Construcción pieza a pieza: Planet Coaster convierte a cualquiera en un diseñador. Coloca rutas, construye paisajes, personaliza atracciones y haz que todo en tu parque sea único gracias a la construcción pieza a pieza y a más de mil componentes de edificios.
                    <br>Modelado del terreno: Juega con la naturaleza y dale nueva forma a la tierra que pisas. Modela el terreno para elevar montañas, formar lagos, horadar cavernas y hasta construir islas en el cielo. Después haz pasar las montañas rusas a través de tu parque por encima y por debajo del nivel del suelo.
                    <br>Absoluta verosimilitud: Recrea tus atracciones favoritas o deja a un lado el mundo real. Juegues como juegues, las atracciones más realistas y las reacciones más realistas de los visitantes hacen de Planet Coaster el simulador más auténtico de la historia.</p>

                    <form method="post" class="formulario">
                    <input type="hidden" id="ID" name="ID" value="19">
                        <input type="hidden" id="Juego" name="Juego" value="Planet Coaster">
                        <p class="producto__precio">Cantidad</p>
                        <input type="number" id="Cantidad" name="Cantidad" class="formulario__campo"  placeholder="Cantidad" value="1"> 
                        <input type="hidden" id="Precio" name="Precio" value="675.00">
                        <p class="producto__precio">Precio $675.00</p>
                        <input type="hidden" id="Imagen" name="Imagen" value="../img/19.jpg">
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
