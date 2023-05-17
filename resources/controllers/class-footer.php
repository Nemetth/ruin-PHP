<?php

class FooterBuilder {
    public static function buildFooter($links) {
        $footer = '<footer class="p-3">';
        $footer .= '<div class="container">';
        $footer .= '<div class="row">';
        $footer .= '<div class="col-lg-4">';
        $footer .= '<ul>';
        foreach ($links as $link => $label) {
            $footer .= '<li><a href="' . $link . '" class="header-list">' . $label . '</a></li>';
        }
        $footer .= '</ul>';
        $footer .= '</div>';
        $footer .= '<div class="col-lg-4 text-center">';
        $footer .= '<img src="' . BASE_LOGO_FOOTER . '" alt="Ruin">';
        $footer .= '</div>';
        $footer .= '<div class="col-lg-4">';
        $footer .= '<div class="d-flex flex-column">';
        $footer .= '<h4>Suscribite a nuestro newsletter</h4>';
        $footer .= '<form action="POST" class="d-flex flex-column">';
        $footer .= '<input type="email" name="mail" id="mail" placeholder="Escribí acá tu email">';
        $footer .= '<p class="help-block" id="statusEmail"></p>';
        $footer .= '<button id="botonEnviar">ENVIAR</button>';
        $footer .= '</form>';
        $footer .= '</div>';
        $footer .= '</div>';
        $footer .= '</div>';
        $footer .= '</div>';
        $footer .= '</footer>';

        return $footer;
    }
}

$baseLogoFooter = '<?php echo $baseLogoFooter ?>';

$links = [
'/ruin' => 'Inicio',
'/ruin/public/view/template/contact.php' => 'Contacto',
'/ruin/public/view/template/about-us.php' => 'Nosotros',
'/ruin/public/view/template/catalog.php' => 'Tienda'
];