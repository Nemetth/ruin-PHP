<html lang="es">
<!-- Head -->
<?php
include("../parts/head.php");
?>
<!-- Header -->

<body class="background-gradient">
  <?php
include('../parts/header.php');

/* Clase de productos */
?>
  <?php
  require_once '../../../resources/controllers/class-shop.php';
?>

  <?php
$producto = new Producto();
$catalogo = $producto->traer_catalogo();
?>
  <div class="d-flex">
    <div class="container">
      <h1>Filtrar por</h1>
      <form method="POST" action="filtrar.php">
        <div class="mb-3">
          <label for="categoria">Categoría:</label>
          <select class="form-select" name="categoria" id="categoria">
            <option value="">Todas</option>
            <option value="ropa">Ropa</option>
            <option value="electronica">Electrónica</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="precio">Precio máximo:</label>
          <input type="number" class="form-control" name="precio" id="precio">
        </div>
        <button type="submit" class="btn btn-primary">Filtrar</button>
      </form>
    </div>
    <div class="row">
      <?php foreach ($catalogo as $producto) { ?>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="<?php echo $producto->imagen; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $producto->perfume; ?></h5>
            <p><?php echo $producto ->price ?></p>
            <?php  echo "<a href='product.php?id=" . $producto->getId() . "'>Ver detalles</a>";?>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php
include('../parts/footer.php');
?>
</body>

</html>