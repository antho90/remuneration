<?php get_header(); ?>
<div class="container">
    <div class="row">
        <main>

            <?php while (have_posts()) : the_post(); ?>

                <h1 class="col-12 text-center fs-title"><?php the_title(); ?></h1>
                <div class="col-sm-offset-2 col-sm-8 offset-md-2 text-justify text-center">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        </main>
    </div>
</div>

<div class="footer">
    <?php get_footer(); ?>
</div>