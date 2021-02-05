<?php get_header(); ?>
<div class="container">
    <div class="row">
        <h1 class="col-12 text-center fs-title"><?= the_title(); ?></h1>
        <div class="col-sm-offset-2 col-sm-8 offset-md-2 text-justify text-center">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<div id="footer">
    <?php get_footer(); ?>
</div>