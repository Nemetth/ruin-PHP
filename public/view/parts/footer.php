<?php

// Obtén la URL actual
$currentUrl = $_SERVER['REQUEST_URI'];
$baseLogoFooter = '';

$baseFooter = '';
if (strpos($currentUrl, 'index.php') !== false) {
      $baseLogoFooter = './public/view/img/logo/icon.png';
    $baseFooter = './resources/controllers/class-shop.php';
} else {
      $baseLogoFooter = 'http://localhost/ruin/public/view/img/logo/icon.png';
    $baseFooter = 'http://localhost/ruin/resources/controllers/class-nav.php';
}

// Define la constante BASE_LOGO con el valor condicionado
define('BASE_LOGO_FOOTER', $baseLogoFooter);

?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ruin/resources/controllers/class-footer.php';


$footer=  FooterBuilder::buildFooter($links);
echo $footer
?>


<style>
.logo-container {
  display: flex;
  justify-content: center;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
  integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
  integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
</script>