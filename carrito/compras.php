<?php include '../templates/cabeceraCarrito.php'?>

<?php
    $sentenciaUsuario = $pdo->prepare("SELECT IDCliente FROM `tblusuarios` WHERE usuario=:Usuario");
    $sentenciaUsuario->bindParam(":Usuario",$_SESSION['usuario']);
    $sentenciaUsuario->execute();
    $identificador=$sentenciaUsuario->fetchAll(PDO::FETCH_ASSOC);
    //print_r($identificador[0]['IDCliente']);
    $idCliente = $identificador[0]['IDCliente'];

    $sentenciaStatus = $pdo->prepare("SELECT status,ID FROM `tblventas` WHERE status = 'completo' and IDCliente = :IDCliente");
    $sentenciaStatus->bindParam(":IDCliente",$idCliente);
    $sentenciaStatus->execute();
    $status=$sentenciaStatus->fetchAll(PDO::FETCH_ASSOC);
    $arr = array();

    for($i=0;$i<sizeof($status);$i++){
        $sentenciaProducto= $pdo->prepare("SELECT IDPRODUCTO FROM `tbldetalleventa` WHERE IDVENTA = :IDVENTA");
        $sentenciaProducto->bindParam(":IDVENTA",$status[$i]['ID']);
        $sentenciaProducto->execute();
        $productos=$sentenciaProducto->fetchAll(PDO::FETCH_ASSOC);
        $arr[$i] = $productos;
    }
 
    $arrIDJuego = array();
    for($i=0;$i<sizeof($status);$i++){
        for($j=0;$j<sizeof($status);$j++){
          $IDJuego = $arr[$i][$j]['IDPRODUCTO'];
          $arrIDJuego[] = $IDJuego;
        }
    }         
?>
<main class="contenedor">
<div class="grid">
<?php
    for($i=0;$i<sizeof($arrIDJuego);$i++){
    $IDJuego = $arrIDJuego[$i];
    $sentencia=$pdo->prepare("Select * from tblproductos where ID=:ID");
    $sentencia->bindParam(":ID", $IDJuego);
    $sentencia->execute();
    $listProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
        <?php foreach ($listProductos as $producto) { ?>
        <div class="producto">
            <form action="prod/Producto.php" method="post">
                    <img class="producto__imagen" src="../img/<?php echo $producto['ID'] ?>.jpg" alt="imagen juego">
                    <div class="producto__informacion">
                        <p class="producto__nombre"><?php echo $producto['Nombre'] ?></p>
                        <p class="producto__precio">$<?php echo $producto['Precio'] ?></p> 
                    </div>
                    <input type="hidden" id="IDJuego" name="IDJuego" value="<?php echo $producto['ID'] ?>">
                    <button style="width: 100%;" class="formulario__submit" type="submit">Descargar</button>
                </form> 
        </div>  <!--.producto-->
        <?php } ?>
        
<?php }?>
</div></main>


<?Php 
include '../templates/pie.php';
?>
    
</body>
</html>