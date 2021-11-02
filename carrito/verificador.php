<?php 
print_r($_GET);

$ClientID ="ARjVoR8AmUgBWm8SVd5ubT1D_zDVuSsGxeW75ubZshukB-vy3kUaJ4fG-zLvxC2Tl4soB17cUui6bPDq";
$Secret = "EJYECmELD1UWf41IOELzQltV_PKujJ_B9SzFLuVU3JlSIwjdk_Zihz89E1u0N_b8laC-a15DlLMMY0yi";

$Login = curl_init("https://api-m.sandbox.paypal.com/v1/oauth2/token");
curl_setopt($Login,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($Login,CURLOPT_USERPWD,$ClientID.":".$Secret);
curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");
$Respuesta = curl_exec($Login);
$objRespuesta=json_decode($Respuesta);
$AccessToken=$objRespuesta->access_token;

print_r($AccessToken);
$venta = curl_init("https://api-m.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentToken']);
curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json ","Authorization: Bearer".$AccessToken));
$RespuestaVenta=curl_exec($venta);
print_r($RespuestaVenta);

?>