<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/session.php';
require_once '../libreria/dompdf/autoload.inc.php';
?>
<?php
    //pdf 
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    $opcion = $dompdf->getOptions();
    $opcion->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($opcion);

    $dompdf->loadHtml("Hola Mundo");

    $dompdf->setPaper('letter');
    //$dompdf->setPaper('A4','landscope');
    $dompdf->render();
    $dompdf->stream("recibo.pdf",array("Attachment" => false));
 
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