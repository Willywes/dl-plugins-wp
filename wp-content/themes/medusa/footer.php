<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */

?>

<body>
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
                                'theme_location' => 'header-menu',
                                'menu_id'        => 'header-menu',
                                'menu_class'     => 'header-menu',
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="content">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article>
                                <h1 class="h2"><?php the_title(); ?></h1>
                                <div>
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-md-9">
                <nav>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => 'footer-menu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

<script>
    jQuery(document).ready(function ($) {
        AOS.init();
    });
</script>
</body>

</html>
