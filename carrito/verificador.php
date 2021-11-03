<?php include '../templates/cabeceraCarrito' ?>

<?php 
//print_r($_GET);

$ClientID ="ARjVoR8AmUgBWm8SVd5ubT1D_zDVuSsGxeW75ubZshukB-vy3kUaJ4fG-zLvxC2Tl4soB17cUui6bPDq";
$Secret = "EJYECmELD1UWf41IOELzQltV_PKujJ_B9SzFLuVU3JlSIwjdk_Zihz89E1u0N_b8laC-a15DlLMMY0yi";

$Login = curl_init("https://api-m.sandbox.paypal.com/v1/oauth2/token");
curl_setopt($Login,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($Login,CURLOPT_USERPWD,$ClientID.":".$Secret);
curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");
$Respuesta = curl_exec($Login);
$objRespuesta=json_decode($Respuesta);
$AccessToken=$objRespuesta->access_token;

//print_r($AccessToken);

$orderData = $_GET['orderData'];
$objDatosTransaccion = json_decode($orderData);
//print_r($objDatosTransaccion);

$state = $objDatosTransaccion->status;
$email = $objDatosTransaccion->payer->email_address;

$total = $objDatosTransaccion->purchase_units[0]->amount->value;
$currency = $objDatosTransaccion->purchase_units[0]->amount->currency_code;
$SID = $_GET['SID'];
$IDVenta = $_GET['ID'];
echo $IDVenta;

curl_close($Login); 
echo $state;
if($state=="COMPLETED"){
    $mensajePaypal = "<center><h3>Pago aprovado</h3></center>";
    
    $sentencia = $pdo->prepare("UPDATE `tblventas`
     SET `PaypalDatos` = :PaypalDatos, 
     `status` = 'aprovado' 
     WHERE `tblventas`.`ID` = :ID;");
     $sentencia->bindParam(":ID",$IDVenta);
     $sentencia->bindParam(":PaypalDatos",$orderData);
     $sentencia->execute();

     $sentencia = $pdo->prepare("UPDATE `tblventas` SET status='completo'  
     WHERE ClaveTransaccion = :ClaveTransaccion
     AND Total = :Total
     AND ID = :ID");
     $sentencia->bindParam(":ClaveTransaccion",$SID);
     $sentencia->bindParam(":Total",$total);
     $sentencia->bindParam(":ID",$IDVenta);
     $sentencia->execute();

}else{
    $mensajePaypal = "<center><h3>Hay un problema con el pago</h3></center>";
}
echo $mensajePaypal;

?>

  
<?Php
    include '../templates/pie.php';
    ?>