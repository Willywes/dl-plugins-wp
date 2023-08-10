<?php
/**
 * medusa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medusa
 */

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
add_filter('show_admin_bar', function() {return false;});

add_action('after_setup_theme', 'medusa_setup');
function medusa_setup(): void
{

    load_theme_textdomain('medusa', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    add_theme_support('custom-background',
        apply_filters('medusa_custom_background_args', [
            'default-color' => 'fff',
            'default-image' => '',
        ])
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ]
    );
}

add_action('after_setup_theme', 'medusa_content_width', 0);
function medusa_content_width(): void
{
    $GLOBALS['content_width'] = apply_filters('medusa_content_width', 640);
}

add_action('widgets_init', 'medusa_widgets_init');
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

add_filter('body_class', 'medusa_body_classes');
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

add_action('wp_head', 'medusa_ping_back_header');
function medusa_ping_back_header(): void
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_enqueue_scripts', 'medusa_scripts');

function medusa_scripts(): void
{
    include __DIR__ . '/functions/google-fonts.php';
    include __DIR__ . '/functions/bootstrap.php';
    include __DIR__ . '/functions/scripts.php';
    include __DIR__ . '/functions/styles.php';

    wp_enqueue_style('medusa-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('medusa-style', 'rtl', 'replace');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

include __DIR__ . '/functions/navs.php';
include __DIR__ . '/functions/afc.php';
include __DIR__ . '/functions/custom-post-types.php';

