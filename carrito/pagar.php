<?php include '../templates/cabeceraCarrito'?>

<?php 

    if($_POST){
        $total = 0;
        $SID = session_id();
        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            $total=$total+($producto['Precio']*$producto['Cantidad']);
        }
    }
    echo "<h3>$".number_format($total,2)."</h3>";

?>

<main class="contenedor">
        <h1>Pagar</h1>
</main>

<?Php 
include '../templates/pie.php';
?>