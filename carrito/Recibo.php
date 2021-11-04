<?php
include '../global/config.php';
include '../global/conexion.php';
include '../templates/session.php';
?>
<?php
if ($_POST) {
    $IDVENTA = $_POST['IDVENTA'];
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

    print_r($objRespuesta);
    //print_r($apellido);
}
?>