<?php 
include '../global/config.php';
include '../global/conexion.php'; 
include '../templates/session.php';
?>


<?php //print_r($_POST)  ?>

<?php 
if($_POST){
    $IDVENTA = $_POST['IDVENTA'];
    $IDPRODUCTO = $_POST['IDPRODUCTO'];
    $CANTIDAD = $_POST['CANTIDAD'];

    $sentencia=$pdo->prepare("SELECT * FROM `tbldetalleventa`
                            WHERE IDVENTA=:IDVENTA
                            AND IDPRODUCTO=:IDPRODUCTO
                            AND DESCARGADO<$CANTIDAD");

    $sentencia->bindParam(":IDVENTA",$IDVENTA);
    $sentencia->bindParam(":IDPRODUCTO",$IDPRODUCTO);
    $sentencia->execute();

    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    print_r($listaProductos);

    if($sentencia->rowCount()>0){
        echo "Archivo en descarga...";

        $nombreArchivo="../archivos/".$listaProductos[0]['IDPRODUCTO'].".pdf";
        $nuevoNombreArchivo=$_POST['IDVENTA'].$_POST['IDPRODUCTO'].".pdf";

        echo $nuevoNombreArchivo;

        header("Content-Transfer-Encoding: binary");
        header("Content-type: application/force-download");
        header("Content-Disposition: attachment; filename=$nuevoNombreArchivo");
        readfile("$nombreArchivo");
       
        $sentencia=$pdo->prepare("UPDATE `tbldetalleventa`
                            SET DESCARGADO=DESCARGADO+1
                            WHERE IDVENTA=:IDVENTA 
                            AND IDPRODUCTO=:IDPRODUCTO");
        
        $sentencia->bindParam(":IDVENTA",$IDVENTA);
        $sentencia->bindParam(":IDPRODUCTO",$IDPRODUCTO);
        $sentencia->execute();


    }else{
        echo "<script>alert('Tus descargas se agotaron.');</script>";
    }
}

?>