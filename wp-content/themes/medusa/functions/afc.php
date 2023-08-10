<?php

// Añade opciones generales para ACF
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' 	=> 'Opciones Generales',
        'menu_title'	=> 'Opciones Generales',
        'menu_slug' 	=> 'opciones-generales',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ]);
}
