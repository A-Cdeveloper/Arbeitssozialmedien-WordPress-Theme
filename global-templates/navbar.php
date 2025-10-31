<div class="container bg-primary navigation d-none d-lg-block rounded-top overflow-hidden">
    <div class="container d-lg-flex">
        <nav class="navbar navbar-expand" role="navigation" aria-label="Main navigation">

            <?php
			  $args = [
				  'theme_location'    => 'main_menu',
                  'depth' => 0,
                  'container' => 'false',
				  'menu_class'        => 'nav navbar-nav',
				  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				  'walker'            => new WP_Bootstrap_Navwalker(),
			  ];
			  wp_nav_menu($args);
        ?>

        </nav>
    </div>
</div>