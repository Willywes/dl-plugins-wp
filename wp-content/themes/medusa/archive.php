<?php
/**
 * The template for displaying archive pages
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
                    <header>
                        <?php
                        the_archive_title('<h1 class="h2">', '</h1>');
                        the_archive_description('<div>', '</div>');
                        ?>
                    </header>
                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <h2 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div>
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php the_posts_navigation(); ?>
                <?php else : ?>
                    <article>
                        <h1 class="h2"><?php _e('Nothing Found', 'medusa'); ?></h1>
                        <div>
                            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for.', 'medusa'); ?></p>
                            <?php get_search_form(); ?>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
