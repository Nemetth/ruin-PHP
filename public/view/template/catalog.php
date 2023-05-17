<!DOCTYPE html>
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
  <section class="container mt-4 mb-4">
    <div class="row">
      <div class="col-2 ">
        <h2 class="titles-style">Filtrar por</h2>
        <form method="POST" action="#" id="filterForm">
          <div class="mb-3">
            <label class="titles-style">Categoría:</label>
            <div class="form-check">
              <input class="form-check-input titles-style" type="radio" name="category" value="Q" id="Q">
              <label class="form-check-label titles-style" for="Q">Linea Q</label>
            </div>
            <div class="form-check">
              <input class="form-check-input titles-style" type="radio" name="category" value="S" id="S">
              <label class="form-check-label titles-style" for="S">Linea S</label>
            </div>
            <div class="form-check">
              <input class="form-check-input titles-style" type="radio" name="category" value="F" id="F">
              <label class="form-check-label titles-style" for="F">Linea F</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
      </div>
      <div class="col-10 d-flex flex-wrap gap-2 " id="productCatalog">
        <?php foreach ($catalogo as $producto) { ?>
        <div class="">
          <div class="">
            <div class="background-perfume"><img class="card-img-top " width="200px" height="200px"
                src="<?php echo $producto->img; ?>" alt="Card image cap"></div>
            <div class="card-body">
              <p class='parragraph-style'>Linea <?php echo $producto->line  ?></p>
              <div class="d-flex">
                <h5 class="card-title parragraph-style pb-1"><?php echo $producto->perfume; ?></h5>
                <p class='parragraph-style ms-5'><?php echo $producto ->price ?></p>
              </div>
              <?php  echo "<a class='detalle' href='product.php?id=" . $producto->getId() . "'> VER DETALLE</a>";?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php
include('../parts/footer.php');
?>

  <script>
  $(document).ready(function() {
    $("#filterForm").submit(function(event) {
      event.preventDefault();

      // Valores del formulario
      let selectedCategory = $("input[name='category']:checked").val();

      // PETICIÓN AJAX PARA INSERTAR
      $.ajax({
        url: "../../../resources/controllers/filter.php",
        type: "POST",
        data: {
          category: selectedCategory
        },
        success: function(response) {
          // Actualizar los productos 
          $("#productCatalog").html(response);
        }
      });
    });
  });
  </script>
</body>

</html>