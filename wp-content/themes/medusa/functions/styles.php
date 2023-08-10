<?php


$styles = [
    ['handle' => 'bootstrap-style', 'src' => '/assets/plugins/bootstrap/css/bootstrap.css'],
    ['handle' => 'slick-style', 'src' => '/assets/plugins/slick/slick.css'],
    ['handle' => 'slick-theme', 'src' => '/assets/plugins/slick/slick-theme.css'],
    ['handle' => 'fotorama-style', 'src' => 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css'],
    ['handle' => 'lightgallery-style', 'src' => '/assets/plugins/lightgallery/css/lightgallery.min.css'],
    ['handle' => 'swiper-style', 'src' => '/assets/plugins/swiper/swiper.min.css']
];


foreach ($styles as $style) {
    wp_enqueue_style($style['handle'], str_contains($style['src'], 'http') ? $style['src'] : get_template_directory_uri() . $style['src'], [], _S_VERSION);
}
