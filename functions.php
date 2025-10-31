<?php 

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}


function theme_setup() {

        load_theme_textdomain( 'arbeitssozialmed', get_template_directory() . '/languages' );

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support('html5',['search-form','gallery','caption','script','style']);
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'responsive-embeds' );
        //add_theme_support( 'post-formats', 
        //['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
        //add_theme_support( 'custom-background' );
        //add_theme_support( 'custom-header' );
        //add_theme_support( 'custom-logo' );
        //add_theme_support( 'customize-selective-refresh-widgets' );
        //add_theme_support( 'starter-content' );


        register_sidebar( ['name'=> 'LEFT','id'=> 'left']); 
        register_sidebar( ['name'=> 'RIGHT','id'=> 'right']);


        register_nav_menus([
          'main_menu' => esc_html__('MAIN', 'arbeitssozialmed'),
          'meta_menu' => esc_html__('META', 'arbeitssozialmed')
        ]);

}


add_action( 'after_setup_theme', 'theme_setup' );





// Styles and scripts
function enqueue_css(){
    wp_enqueue_style( 'style', get_stylesheet_directory_uri(). '/style.css', [], _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'enqueue_css' );





/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );







///
add_filter('intermediate_image_sizes', function($sizes) {
    return array_diff($sizes, ['medium_large','1536x1536','2048x2048']);
});

/* Custom ajax loader */
function my_wpcf7_ajax_loader () {
    return  get_bloginfo('stylesheet_directory') . '/images/ajax-loader.gif';
}
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');


/**/
add_filter('acf_the_content', 'eae_encode_emails');
add_filter('acf/load_value', 'eae_encode_emails');



/**/
if( function_exists('acf_add_options_page') ) {   
 
acf_add_options_page(array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'Basic Settings',
        'menu_slug'     => 'general-settings',
        'position'     => '8'

    )); 

}

/**/
function my_login_logo_one() { 
?>
<style type="text/css">
body.login div#login h1 a {
    background-image: url(<?php bloginfo('template_directory');
    ?>/images/logo_kompetenzzentrum_01.png);
    background-size: 100% !important;
    width: 100% !important;
    padding-bottom: 0px;
}
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );



// remove specific dashboard menus for non-admin users
function hide_admin_menus() {
    if (current_user_can( 'create_users' )) return;
    remove_menu_page( 'plugins.php' ); 
    remove_menu_page( 'themes.php' ); 
    remove_menu_page( 'tools.php' ); 
    remove_menu_page( 'users.php' ); 
    remove_menu_page( 'wpcf7' );  //CF7
    remove_menu_page( 'edit.php?post_type=acf-field-group' );  //ACF
    remove_menu_page( 'edit.php?post_type=rmp_menu' ); //RESPONSIVE MENU
    remove_menu_page( 'duplicator' ); //DUPLICATOR
    remove_menu_page( 'options-general.php' );
    remove_menu_page( 'wpseo_dashboard' );  // YOAST
    remove_menu_page( 'sucuriscan' );  // SECURYSCAN
    remove_menu_page( 'aiowpsec' );  // WP-SECURITY
    
}
add_action( 'admin_menu', 'hide_admin_menus',120 );



add_action('send_headers', function(){
// Enforce the use of HTTPS
header('Strict-Transport-Security:max-age=31536000; includeSubdomains; preload');
// Prevent Clickjacking
header('X-Frame-Options: SAMEORIGIN');
// Block Access If XSS Attack Is Suspected
header('X-XSS-Protection: 1; mode=block');
// Prevent MIME-Type Sniffing
header('X-Content-Type-Options: nosniff');
// Referrer Policy
header("Referrer-Policy: no-referrer");
/*
header("Content-Security-Policy: frame-ancestors; default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self'; style-src 'self';  object-src 'none'; form-action 'self'; base-uri 'none'");*/

}, 1);

?>