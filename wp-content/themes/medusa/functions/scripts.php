<?php

$scripts = [
    ['handle' => 'scripts', 'src'    => '/assets/js/scripts.js', 'in_footer' => true],
    ['handle' => 'slick-js', 'src'    => '/assets/plugins/slick/slick.min.js', 'in_footer' => true],
    ['handle' => 'fotorama-js', 'src'    => 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js', 'in_footer' => true],
    ['handle' => 'swiper-js', 'src'    => '/assets/plugins/swiper/swiper.min.js', 'in_footer' => true],
    ['handle' => 'lightgallery-js', 'src'    => '/assets/plugins/lightgallery/js/lightgallery.js', 'in_footer' => true],
    ['handle' => 'aos', 'src'    => '/assets/plugins/aos/aos.js', 'in_footer' => true],
    ['handle' => 'count-up.js', 'src'    => '/assets/plugins/count-up/count-up.js', 'in_footer' => true],
    ['handle' => 'parallax.js', 'src'    => '/assets/plugins/parallax/parallax.min.js', 'in_footer' => true],
];


foreach ($scripts as $script) {
    wp_enqueue_script($script['handle'], str_contains($script['src'], 'http') ? $script['src'] : get_template_directory_uri() . $script['src'], [], _S_VERSION, $script['in_footer']);
}

