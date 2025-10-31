<?php get_header(); ?>
<!---->
<main id="main-content" role="main" <?php post_class(['container','py-3','bg-white','shadow','rounded-bottom']); ?> aria-label="Main content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'loop-templates/content','home'); ?>
    <?php endwhile; else : ?>
    <?php get_template_part( 'loop-templates/content', 'none' ); ?>
    <?php endif; ?>
</main>
<!---->
<?php get_footer(); ?>