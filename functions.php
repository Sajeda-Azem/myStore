

<?php 

require_once('bs4navwalker.php');
?>
<?php



add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
}





function add_scripts(){
    /*
    
    remove registraion for old jquery
    */
    wp_deregister_script('jquery');
    /*
    to register jquery
    */
    wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),'false','',true);
    wp_enqueue_script('jquery');
 
        wp_enqueue_script('main-js',get_stylesheet_directory_uri().'/js/main',array(),false,true);
    wp_enqueue_script('jquery-js',get_stylesheet_directory_uri().'/js/jquery-3.5.1',array(),false,true);

     wp_enqueue_script('bootstrap-scripts',get_stylesheet_directory_uri().'/js/bootstrap.min.js',array(),false,true);
    
}

add_action('wp_enqueue_scripts','add_scripts');











function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


add_action( 'woocommerce_before_checkout_form', 'checkout_message' );
function checkout_message() {
echo '<p>Please fill all required fields. Thank you!</p>';
}

//add menus to the theme

register_nav_menus(
    array(
        'top-menu'=>'top Menu',
        'footer-menu'=>'footer menu'
    )
);

function bootstrap_header_menu(){
     wp_nav_menu(
              array(
                  'theme_location'=>'top-menu',
                  'menu_class'=>'nav navbar-nav',
                  'container'=>'div',
                  'container_class'  =>'collapse navbar-collapse',
                'container_id'   =>'collapsibleNavbar',
                  'depth'   =>'6'

                 
              )
          );
}
function footer_menu_custom(){
    wp_nav_menu(
    array(
        'theme_location'=>'footer-menu'
    ));
}
function theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'footer menu' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Appears in the footer' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );


function loop_columns() {
return 4; // 4 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);

register_sidebar
    (
    array(
        
        'name'         =>'shop sidebar',
        'id'           =>'shop-sidebar' ,
        'class'        =>'',
        'before_title' =>'<h4>',
        'aftr_title'   =>'</h4>'
        
    )
);
    

add_filter('mime_types', 'dd_add_jfif_files');
function dd_add_jfif_files($mimes){
    $mimes['jfif'] = "image/jpeg";
    return $mimes;
}


?>