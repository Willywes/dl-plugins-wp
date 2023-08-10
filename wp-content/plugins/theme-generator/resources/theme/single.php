<?php get_header(); ?>

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

<?php get_footer(); ?>
