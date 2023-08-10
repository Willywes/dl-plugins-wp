<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medusa
 */

get_header(); ?>

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
                                <button class="btn btn-primary">
                                    download
                                </button>
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

<?php  get_footer(); ?>
