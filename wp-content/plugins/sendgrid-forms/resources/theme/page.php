<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medusa
 */

get_header();
?>

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

<?php get_footer(); ?>
