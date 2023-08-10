<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package medusa
 */

get_header();
?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article>
                        <h1 class="h2"><?php _e( 'Oops! That page can&rsquo;t be found.', 'medusa' ); ?></h1>
                        <div>
                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'medusa' ); ?></p>
                            <?php get_search_form(); ?>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
