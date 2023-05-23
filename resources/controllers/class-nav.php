<?php

class NavBuilder {
    public static function buildNav($links1, $links2) {
        $nav = '<header class="header-styles ">';
        $nav .= '<div class="container d-flex align-items-center justify-content-evenly container-nav">';
        $nav .= '<div class="div-fav-log-desktop">';
        $nav .= '<ul class="d-flex gap-3">';
        $nav .= '<li><i class="fa-regular fa-heart fa-lg" style="color: #ffffff;"></i></li>';
        $nav .= '<li><i class="fa-regular fa-user fa-lg" style="color: #ffffff;"></i></li>';
        $nav .= '</ul>';
        $nav .= '</div>';
        $nav .= '<div class="div-cart-fav">';
        $nav .= '<div class="div-fav-log-mobile">';
        $nav .= '<ul class="d-flex gap-3">';
        $nav .= '<li><i class="fa-regular fa-heart fa-lg" style="color: #ffffff;"></i></li>';
        $nav .= '<li><i class="fa-regular fa-user fa-lg" style="color: #ffffff;"></i></li>';
        $nav .= '</ul>';
        $nav .= '</div>';
         $nav .= '<div d-flex class="search-cart-mobile">';
        $nav .= '<ul class="d-flex gap-3">';
        $nav .= '<li><i class="fa-regular fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></li>';
        $nav .= '<li><i class="fa-solid fa-regular fa-cart-shopping" style="color: #ffffff;"></i></li>';
        $nav .= '</ul>';
        $nav .= '</div>';
        $nav .= '</div>';
        $nav .= '<nav>';
        $nav .= '<ul class="d-flex gap-3">';
        foreach ($links1 as $link => $label) {
            $nav .= '<li><a href="' . $link . '" class="header-list">' . $label . '</a></li>';
        }
        $nav .= '</ul>';
        $nav .= '</nav>';
        $nav .= '<img src="' . BASE_LOGO . '" alt="Ruin">';
        $nav .= '<nav>';
        $nav .= '<ul class="d-flex gap-3">';
        foreach ($links2 as $link => $label) {
            $nav .= '<li><a href="' . $link . '" class="header-list">' . $label . '</a></li>';
        }
        $nav .= '</ul>';
        $nav .= '</nav>';
        $nav .= '<div d-flex class="search-cart-desktop">';
        $nav .= '<ul class="d-flex gap-3">';
        $nav .= '<li><i class="fa-regular fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></li>';
        $nav .= '<li><i class="fa-solid fa-regular fa-cart-shopping" style="color: #ffffff;"></i></li>';
        $nav .= '</ul>';
        $nav .= '</div>';
        $nav .= '</div>';
        $nav .= '</header>';

        return $nav;
    }
    
}

$links1 = [
    '/ruin' => 'Inicio',
    '#' => 'Nosotros'
];

$links2 = [
    '/ruin/public/view/template/catalog.php' => 'Tienda',
    '/ruin/public/view/template/contact.php' => 'Contacto'
];



?>