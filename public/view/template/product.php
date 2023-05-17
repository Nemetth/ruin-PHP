<html lang="es">
<?php
include("../parts/head.php");
?>

<body>
  <?php
include('../parts/header.php');

?>



  <?php
  require_once '../../../resources/controllers/class-shop.php';
?>

  <?php

$productos = new Producto();


$idProducto = $_GET['id'];
$catalogo = $productos->traer_catalogo();

$productoEncontrado = null;
foreach ($catalogo as $producto) {
    if ($producto->id == $idProducto) {
        $productoEncontrado = $producto;
        break; 
    }
}
if ($productoEncontrado != null) {
    echo "ID del producto: " . $productoEncontrado->id . "<br>";
    echo "Nombre del perfume: " . $productoEncontrado->perfume . "<br>";

}

?>

  <?php
include('../parts/footer.php');
?>


</body>