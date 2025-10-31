<div class="text-center">
    <h2><?php esc_html_e('Wir können die von Ihnen gewünschte Seite einfach nicht finden.','arbeitssozialmed')?></h2>

    <img src="<?php echo esc_url(get_theme_file_uri( 'images/not-found.png' ) ); ?>" alt="Not found"
        style="width: 100%; max-width: 180px;" />
    <p>
        <a href="<?php echo esc_url( home_url() ) ;?>" aria-label="Back to homepage">
            <?php  esc_html_e('Hier geht es zu unserer Startseite.','arbeitssozialmed')?>
        </a>
    </p>
</div>