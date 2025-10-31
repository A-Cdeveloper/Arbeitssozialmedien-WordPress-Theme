<?php 
$logo = get_field('logo', 'options');
$site_name = get_bloginfo('name');
?>
<div id="logo" class="col-30 col-lg-15 text-end">
    <a href="<?php echo esc_url( home_url() ); ?>" rel="home"
        aria-label="<?php echo esc_attr( $site_name ); ?> - Back to homepage">
        <?php if( $logo && isset($logo['url']) ) : ?>
        <?php echo wp_get_attachment_image( $logo['id'], 'full', false, ['class' => 'img-fluid', 'alt' => esc_attr( $site_name ) . ' logo'] ); ?>
        <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_kompetenzzentrum_01.png"
            alt="<?php echo esc_attr( $site_name ); ?> logo" class="img-fluid">
        <?php endif; ?>
    </a>
</div>