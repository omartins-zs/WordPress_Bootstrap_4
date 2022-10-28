<?php
// Template Name: Barra Lateral na esquerda

?>

<?php get_header(); ?>

<div class="row">

    <?php get_sidebar(); ?>

    <div class="col-md-8 col-sm-12">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h3 class="mb-3">
                    <?php the_title(); ?>
                </h3>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php else : get_404_template();
        endif; ?>

    </div>

</div>

</div>

<?php get_footer(); ?>