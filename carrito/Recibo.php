<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/session.php';
require_once '../libreria/dompdf/autoload.inc.php';
?>
<?php
    
    $IDVENTA = $_POST['IDVENTA'];
      // Informacion del usuario 
    $sentencia=$pdo->prepare("SELECT * FROM `tblventas` where ID=:ID");
    $sentencia->bindParam(":ID", $IDVENTA);
    $sentencia->execute();
    $listaVenta = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    //print_r($listaVenta);

    $ID = $listaVenta[0]['ID'];
    $ClaveTransaccion = $listaVenta[0]['ClaveTransaccion'];
    $datosPayPal = $listaVenta[0]['PaypalDatos'];
    $objRespuesta = json_decode($datosPayPal);
    $state = $objRespuesta->status;
    $total = $objRespuesta->purchase_units[0]->amount->value;
    $currency = $objRespuesta->purchase_units[0]->amount->currency_code;
    $correo = $objRespuesta->payer->email_address;
    $nombre = $objRespuesta->payer->name->given_name;
    $apellido = $objRespuesta->payer->name->surname;

    // informacion de los prouctos comprados por el usuario 
    $sentenciaProductos = $pdo->prepare("SELECT * FROM 
    tbldetalleventa, tblproductos 
    WHERE tbldetalleventa.IDPRODUCTO=tblproductos.ID 
    and tbldetalleventa.IDVENTA=:ID");
    $sentenciaProductos->bindParam(":ID", $IDVENTA);
    $sentenciaProductos->execute();
    $listaProducto = $sentenciaProductos->fetchAll(PDO::FETCH_ASSOC);

    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        $NombresJuegos = $listaProducto[$indice]['Nombre'];
        $PrecioJuegos = $listaProducto[$indice]['PRECIOUNITARIO'];
        $CantidadJuegos = $listaProducto[$indice]['CANTIDAD'];
    //print_r($CantidadJuegos);
    }
    //print_r($listaProducto);
  ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Video Games Store</title>
            <link rel="stylesheet" href="../css/normalize.css">
            <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../css/style.css">
        </head>
        <body>
            <h3 style="text-align: center;">Recibo de compra</h3>
            <center>
            <?php if(!empty( $_SESSION['CARRITO'])) { ?>
        <table style="border-collapse: collapse;"  border="5"  bordercolor="#1FC52E">
                    <tr>
                        <th width="25%">Imagen</th>
                        <th width="30%">Juego</th>
                        <th width="15%">Cantidad</th>
                        <th width="20%">Precio</th>
                        <th width="20%">Total</th>
                    </tr>
                    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
                    <tr>
                        <td width="25%"><img class="producto__imagen" src="http://<?php echo $_SERVER['HTTP_HOST'].'/TiendaWebPhp/img/'.$producto['Imagen'] ?>" alt="imagen juego"></td>
                        <td width="30%"><?php echo $producto['Juego'] ?></td>
                        <td width="15%"><?php echo $producto['Cantidad'] ?></td>
                        <td width="20%"><?php echo '$'.$producto['Precio'] ?></td>
                        <td width="20%"><?php echo '$'.number_format($producto['Precio']*$producto['Cantidad'],2) ?></td>  
                    </tr>
                        <?php 
                        $total = $total+($producto['Precio']*$producto['Cantidad']);?>
                    <?php } ?>
                    <tr>
                        <td colspan="4" align="right">Total</td>
                        <td align="right"><?php echo '$'.number_format($total,2);?></td>
                        <td></td>
                    </tr>
            </table></h3>
            <?php }?></center>

        </body>
    </html>

  <?php
    //pdf 
    $html = ob_get_clean();

    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    $opcion = $dompdf->getOptions();
    $opcion->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($opcion);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('letter');
    //$dompdf->setPaper('A4','landscope');
    $dompdf->render();
    $dompdf->stream("recibo.pdf",array("Attachment" => false));
?>