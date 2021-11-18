<?php include '../templates/cabeceraCarrito.php' ?>

<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sentencia=$pdo->prepare("SELECT COUNT(*) FROM tblusuarios where usuario=:Usuario AND clave=:Clave");

    $sentencia->bindParam(":Usuario",$usuario);
    $sentencia->bindParam(":Clave",$clave);
    $sentencia->execute();

    $existe=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    if($existe[0]['COUNT(*)'] > 0)
        header("location: ../index.php");
    else 
        echo "Datos incorrectos";

?>

<?Php 
include '../templates/pie.php';
?>

