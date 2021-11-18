<?php include '../templates/cabeceraCarrito.php' ?>
<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sentencia=$pdo->prepare("SELECT COUNT(*) FROM tblusuarios where usuario=:Usuario");

    $sentencia->bindParam(":Usuario",$usuario);
    $sentencia->execute();

    $existe=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    if($existe[0]['COUNT(*)'] > 0) // se verifica que el correo ingresado no este registado en la base de datos 
        echo "Correo electronico en uso";
    else { // si no, se hace el registro
        $sentencia=$pdo->prepare("INSERT INTO `tblusuarios` (`IDCliente`, `usuario`, `clave`) VALUES (NULL, :Usuario, :Clave)");
        $sentencia->bindParam(":Usuario",$usuario);
        $sentencia->bindParam(":Clave",$clave);
        $sentencia->execute();
        header("location: ../index.php");
    }
?>

<?Php 
include '../templates/pie.php';
?>