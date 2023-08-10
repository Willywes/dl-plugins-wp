<?php
/**
 * medusa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medusa
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function medusa_setup(): void
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on medusa, use a find and replace
        * to change 'medusa' to the name of your theme in all the template files.
        */
    load_theme_textdomain('medusa', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-primary'   => esc_html__('Menú Principal', 'medusa'),
            'menu-secondary' => esc_html__('Menú Secundario', 'medusa'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'medusa_custom_background_args',
            array(
                'default-color' => 'fff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'medusa_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medusa_content_width(): void
{
    $GLOBALS['content_width'] = apply_filters('medusa_content_width', 640);
}

add_action('after_setup_theme', 'medusa_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medusa_widgets_init(): void
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'medusa'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'medusa'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}

add_action('widgets_init', 'medusa_widgets_init');

/**
 * Enqueue scripts and styles.
 */


// BOOTSTRAP


// SCRIPTS THEME


function medusa_scripts()
{

    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.css');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/bootstrap/bootstrap.min.css');
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/js/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css');
    wp_enqueue_style('fotorama-style', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css');


    wp_enqueue_style('lightgallery-style', get_template_directory_uri() . '/js/lightgallery/css/lightgallery.min.css');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/js/swiper/swiper.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap', false);

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick/slick.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('fotorama-js', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js', array(), _S_VERSION, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper/swiper.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('lightgallery-js', get_template_directory_uri() . '/js/lightgallery/js/lightgallery.js', array(), _S_VERSION, true);



//	wp_enqueue_script( 'slider-thumbs', get_template_directory_uri() . '/template-parts/modules/sliders/slider-thumbs/slider-thumbs.js', array(), _S_VERSION, true );

    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array(), _S_VERSION, true);
    wp_enqueue_style('medusa-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('medusa-style', 'rtl', 'replace');

    wp_enqueue_script('medusa-navigation', get_template_directory_uri() . '/js/scripts.js', array(), _S_VERSION, true);

    wp_enqueue_script('count-up.js', get_template_directory_uri() . '/js/count-up.js', array(), _S_VERSION, true);
    wp_enqueue_script('parallax.js', get_template_directory_uri() . '/js/parallax.min.js', array(), _S_VERSION, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'medusa_scripts');


//require get_template_directory() . '/inc/template-functions.php';


function medusa_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}

add_filter('body_class', 'medusa_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function medusa_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'medusa_pingback_header');


function remove_p_tags($content): string
{
    $content = preg_replace('/<p[^>]*>/', '', $content);
    return str_replace('</p>', '', $content);
}

function splitLinesWithAOS($content, $options = []): string
{
    $effect = $options['effect'] ?? 'fade-up';
    $delay = $options['delay'] ?? 0;
    $delay_internal = $options['delay_internal'] ?? 100;
    $duration = $options['duration'] ?? 300;
    $offset = $options['offset'] ?? 0;
    $easing = $options['easing'] ?? 'ease-in-out';
    $mirror = $options['mirror'] ?? true;
    $once = $options['once'] ?? false;
    $anchorPlacement = $options['anchorPlacement'] ?? 'top-center';

    $content = trim($content);
    $lines   = preg_split("/<br[^>]*>/", $content);

    $result = '';
    foreach ($lines as $key => $line) {
        $line = trim($line);
        if (!empty($line)) {
            $result .= '<span class="d-block" data-aos="' . $effect . '" data-aos-delay="' . $delay . '" data-aos-duration="' . $duration . '" data-aos-offset="' . $offset . '" data-aos-easing="' . $easing . '" data-aos-mirror="' . $mirror . '" data-aos-once="' . $once . '" data-aos-anchor-placement="' . $anchorPlacement . '">';
            $result .= $line;
            $result .= '</span>';
            $delay  += $delay_internal;
        }
    }

    return $result;
}



include (__DIR__ . 'functions.php');
