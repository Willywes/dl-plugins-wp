<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="top-holder scrolled">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo get_home_url(); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo">
                    </a>
                </div>
                <div class="col-md-9">
                    <nav>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'primary-menu',
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>

<script>
    window.addEventListener('scroll', function () {
        const topHolder = document.querySelector('.top-holder');
        const top = window.scrollY;
        if (top === 0) {
            topHolder.classList.remove('scrolled');
        } else {
            topHolder.classList.add('scrolled');
        }
    });
</script>
