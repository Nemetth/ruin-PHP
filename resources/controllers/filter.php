<?php
//AJAX
$category = $_POST['category'] ?? '';


require_once './class-shop.php';
$producto = new Producto();
$catalogo = $producto->traer_catalogo();


if (!empty($category)) {
  $productosFiltrados = array_filter($catalogo, function($producto) use ($category) {
    return $producto->line === $category;
  });
} else {
  $productosFiltrados = $catalogo;
}

// Mostrar los productos filtrados en HTML
foreach ($productosFiltrados as $producto) {
  echo "div class=''>";
  echo "<div class=''>";
  echo "<div class='background-perfume'><img src='{$producto->img}' alt='{$producto->perfume}' class='card-img-top' width='200px' height='200px' /></div> ";
  echo "<div class='card-body'></div>";
  echo "<h5 class='card-title parragraph-style'>{$producto->perfume}</h5>";
  echo "<p class='parragraph-style'>Linea: {$producto->line}</p>";
  echo "<p class='parragraph-style'>Precio: {$producto->price}</p>";
  echo "<a href='product.php?id=" . $producto->getId() . "'>Ver detalles</a>";
  echo "</div>";
}