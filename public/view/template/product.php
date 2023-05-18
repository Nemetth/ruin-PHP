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
?>

  <section class="background-gradient pt-3 p-5 ">
    <div class="column">
      <div class="row">
        <div class="col-4">
          <img src="<?php echo $producto->img ?>" alt="<?php echo $producto->perfume?>" width="400px">
        </div>
        <div class="col-8">
          <form action="" method="POST">
            <h2 class="titles-style"> Linea <?php echo $producto ->line?></h2>
            <h1 class="titles-style"><?php echo $producto ->perfume?></h1>
            <h3 class="titles-style"><?php echo $producto ->price?></h3>
            <p class="parragraph-style"><?php echo $producto ->description?></p>
            <?php foreach ($producto->size as $value): ?>
            <input class='paragraph-style' type="radio" name="size" value="<?php echo $value ?>"><?php echo $value ?>
            <?php endforeach; ?>
            <p class='parragraph-style'><?php echo $producto ->ingredients ?></p>
            <button>Agregar al carrito</button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <?php
include('../parts/footer.php');
?>


</body>

<!--    if ($productoEncontrado != null) {
  echo " ID del producto: " . $productoEncontrado->id . " <br>";
          echo "Nombre del perfume: " . $productoEncontrado->perfume . "<br>";



          }  -->