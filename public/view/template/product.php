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

  <section class="background-gradient pt-3 p-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 order-lg-1 order-2">
          <img src="<?php echo $producto->img ?>" alt="<?php echo $producto->perfume ?>" class="img-fluid mb-3 mb-lg-0">
        </div>
        <div class="col-lg-8 order-lg-2 order-1">

          <h2 class="titles-style">Linea <?php echo $producto->line ?></h2>
          <h1 class="titles-style"><?php echo $producto->perfume ?></h1>
          <h3 class="titles-style"><?php echo $producto->price ?></h3>
          <p class="paragraph-style"><?php echo $producto->description ?></p>
          <form action="../../../resources/controllers/procesar.php" method="POST">
            <?php foreach ($producto->intensity as $value): ?>
            <input class="paragraph-style" type="radio" checked name="intensity" value="<?php echo $value ?>"><label
              class="paragraph-style ms-2" for=""><?php echo $value ?></label>
            <?php endforeach; ?>
            <p class="paragraph-style">Ingredientes: <?php echo $producto->ingredients ?></p>
            <button id="button-carrito" class="btn btn-primary">Agregar al carrito</button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <?php
include('../parts/footer.php');
?>
  <script>
  $(document).ready(function() {
    $("#button-carrito").click(function(event) {
      event.preventDefault();
    });
  });
  </script>

</body>