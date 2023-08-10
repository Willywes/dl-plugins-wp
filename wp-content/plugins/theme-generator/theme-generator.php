<?php

use Willywes\WPThemeGenerator\FileGenerator;
use Willywes\WPThemeGenerator\Tools;

// Exit if accessed directly
if (!defined('ABSPATH')) exit;
// If this file is called directly, abort.
if (!defined('WPINC')) exit;

define('TG_PATH', plugin_dir_path(__FILE__));
define("TG_URL", plugin_dir_url(__FILE__));
define("TG_BASE_NAME", plugin_basename(__FILE__));
define("WP_THEME_ROOT", get_theme_root());


/*
Plugin Name: Theme Generator
Plugin URI: https://devlabs.cl/
Description: Este plugin genera un tema de wordpress con los archivos necesarios para comenzar a desarrollar un theme, copia todas las dependencias como estilos, javascript, fuentes e imágenes a la carpeta del tema, además de generar el archivo style.css con los datos de la plantilla y el archivo functions.php con las funciones necesarias para que e la plantilla funcione. Toda la configuración se realiza en el archivo config.php que se generara a partir de campos desde el administrador de wordpress en el plugin. Permitirá actualizar la configuración en cualquier momento sin perjudicar la personalización de la plantilla. Permitirá también crear custom post types y taxonomies personalizadas.
Version: 1.0
Author: Devlabs
Author URI: https://devlabs.cl/
License: GPLv2 or later
*/

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';


add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style('tg-admin-style', TG_URL . 'build/index.css', array(), '1.0.0', 'all');
    wp_enqueue_script('tg-admin-script', TG_URL . 'build/index.js', array('wp-element'), '1.0.0', true);
    wp_localize_script('tg-ajax-script', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('my-ajax-nonce'),
    ]);
});;

add_action('admin_menu', 'tg_menu');

function tg_menu(): void
{
    add_menu_page('Theme Generator', 'Theme Generator', 'manage_options', 'theme-generator', 'tg_admin', 'dashicons-admin-generic', '1');
}


function tg_admin(): void
{
    require_once TG_PATH . 'views/admin.php';
}


add_action('plugins_loaded', 'tg_init_class', 0);

function tg_init_class(): void
{
    class ThemeGenerator
    {
        private $fileGenerator;

        public function __construct()
        {
            add_action('wp_ajax_tg_create_theme', [$this, 'tg_create_theme']);
            add_action('wp_ajax_nopriv_tg_create_theme', [$this, 'tg_create_theme']);
            $this->fileGenerator = new FileGenerator();

        }

        public function tg_create_theme(): void
        {

            try {
                $theme = $_POST;

                $slug          = $theme['slug'];
                $theme_path    = WP_THEME_ROOT . '/' . $slug;
                $theme_url     = WP_CONTENT_URL . '/themes/' . $slug;
                $theme['path'] = $theme_path;
                $theme['url']  = $theme_url;


                Tools::unzip(TG_PATH . 'resources/theme.zip', WP_THEME_ROOT, $slug);
                $fileGenerator = new FileGenerator();
                $fileGenerator->generateBaseThemeStyle($theme_path, $theme);
                $fileGenerator->generateCustomPostTypes($theme_path, $theme);

                wp_send_json_success(['message' => 'Tema creado correctamente', 'data' => $theme]);
            } catch (\Exception $e) {
                wp_send_json_error(['message' => $e->getMessage()]);
            }
        }

        function continue_theme_creation($theme_path, $theme): void
        {
            wp_send_json_success(['message' => 'Tema creado correctamente', 'data' => $theme]);
            $fileGenerator = new FileGenerator();
            $fileGenerator->generateBaseThemeStyle($theme_path, $theme);
        }

    }

    new ThemeGenerator();
}

//
//        // function to create a json from javascript object
//
//        function tg_create_json($data, $file): void
//        {
//            $json = json_encode($data);
//            $file = TG_PATH . $file;
//            file_put_contents($file, $json);
//        }
//
//        // function to create a file from string
//
//        function tg_create_file($data, $file): void
//        {
//            $file = TG_PATH . $file;
//            file_put_contents($file, $data);
//        }
//
//        // function to create a folder
//
//
//
//        // function to copy a file
//
//        function tg_copy_file($file, $folder): void
//        {
//            $file   = TG_PATH . $file;
//            $folder = TG_PATH . $folder;
//            copy($file, $folder);
//        }
//
//        // function to copy a folder
//        function tg_copy_folder($folder, $destination): void
//        {
//            $folder      = TG_PATH . $folder;
//            $destination = TG_PATH . $destination;
//            if (!file_exists($destination)) {
//                mkdir($destination, 0777, true);
//            }
//            $files = scandir($folder);
//            foreach ($files as $file) {
//                if ($file !== '.' && $file !== '..') {
//                    copy($folder . '/' . $file, $destination . '/' . $file);
//                }
//            }
//        }

//    }
//
//    new ThemeGenerator();
//}
