<?php 
$main_headline = get_field('main_headline');
$content_blocks = get_field('content_blocks');
?>


<article class="row justify-content-between">
    <aside class="col-30 col-xl-auto mb-4 mb-xl-0 text-center" aria-label="Post thumbnail and metadata">
        <figure>
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/1_kompetenzzentrum.jpg"
                alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid">
            <?php endif; ?>
        </figure>
        <nav id="meta-menu" class="mt-2 mt-xl-5 mx-1 flex justify-content-center justify-content-xl-start"
            aria-label="Post actions">
            <?php echo do_shortcode('[printfriendly current="yes"]'); ?>
            <?php get_template_part( 'global-templates/meta-menu' ); ?>
        </nav>
    </aside>

    <section class="col-30 col-xl pe-2 pe-xl-4 ps-3" aria-label="Post content">
        <?php if( $main_headline ): ?>
        <h1><?php echo esc_html( $main_headline ); ?></h1>
        <?php endif; ?>

        <?php if( $content_blocks ): ?>
        <?php foreach( $content_blocks as $content_block ): ?>
        <section class="mb-4">
            <h2><?php echo esc_html( $content_block['headline'] ); ?></h2>
            <div class="ps-0 ps-xl-2">
                <?php echo wp_kses_post( $content_block['content'] ); ?>
            </div>
        </section>
        <?php endforeach; ?>
        <?php endif; ?>
    </section>
</article>