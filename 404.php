<?php get_header(); ?>
<!---->

<main id="main-content" role="main" <?php post_class(['container','py-5','bg-white','shadow','rounded-bottom']); ?>
    aria-label="Main content">

    <?php get_template_part( 'loop-templates/content', 'none' ); ?>


</main>

<?php get_footer(); ?>