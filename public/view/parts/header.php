<?php

// Obtén la URL actual
$currentUrl = $_SERVER['REQUEST_URI'];

// Define una variable para almacenar la URL base por defecto
$baseLogo = '';
$baseClassNav = '';


if (strpos($currentUrl, 'index.php') !== false) {
    $baseLogo = './public/view/img/logo/icon.png';
    $baseClassNav = './resources/controllers/class-shop.php';
} else {
    $baseLogo = 'http://localhost/ruin/public/view/img/logo/icon.png';
    $baseClassNav = 'http://localhost/ruin/resources/controllers/class-nav.php';
}

// Define la constante BASE_LOGO con el valor condicionado
define('BASE_LOGO', $baseLogo);
define('BASE_CLASS_NAV', $baseClassNav);

?>


<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ruin/resources/controllers/class-nav.php';


$nav = NavBuilder::buildNav($links1, $links2);


echo $nav
?>