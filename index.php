<?php get_header(); ?>
<main>
    <?php while (have_posts()) : the_post(); ?>

        <article>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h1 class="fs-title mg-top"><?php the_title(); ?></h1>

                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <button class="boutton" type="button">
                                Voir
                            </button>
                        </a>
                    </div>
                    <div class="col-md-6 mg-top col-12">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        </article>

    <?php endwhile; ?>
</main>

<div class="footer">
    <?php get_footer(); ?>
</div>