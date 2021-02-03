<?php get_header(); ?>
<div class="container">
    <div class="row">
        <h1 class="col-12 text-center fs-title"><?= the_title(); ?></h1>
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>