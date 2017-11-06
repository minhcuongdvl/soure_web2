<?php
/**
 * @ khai báo giá trị :
 * THEM_URL: lấy đường dẫ4n thư mục thems
 * CORE : lấy dương dân thư mục CORE
 * 
**/
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL ."/core");
define('CSS', THEME_URL ."/css");

  require_once( CORE . '/init.php' );
  
if(!function_exists('vvcweb_theme_setup')){
    function vvcweb_theme_setup(){
        $languages_folder = THEME_URL ."/languages";
        load_theme_textdomain('vcc_main',$languages_folder);
        
        /** tự động load link **/
        add_theme_support('automatic-feed-link');
        
        add_theme_support('post-thumbnails');
        
        add_theme_support('post-formats',array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));
        
        add_theme_support('title-tag');
        
      
            
//            Cuong edit Footer 22/09/2017 (E)
        /**  end edit **/            
        
$defaults = array(
	'default-color'          => '000000',
	
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


add_theme_support( 'custom-header' );

        
        /*thêm menu */
        register_nav_menu('primary-menu',__('Primary Menu','vvc_menu'));
    }
    add_action('init','vvcweb_theme_setup');
}

function smw_widgets_init() {
      /**     vvc edit   12/09/2017  * */
            register_sidebar(array(
    'name' => 'vvc-sidebar',
    'id' => 'vvc-sidebar',
    'description' => 'Khu vực sidebar hiển thị dưới mỗi bài viết',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
                
        )
                    ); 
            
            
//            Diem.GTN edit Footer 20/09/2017 (S)
            register_sidebar(array(
    'name' => 'Sidebar Footer',
    'id' => 'Sidebar Footer',
    'description' => 'Khu vực sidebar hiển thị dưới mỗi bài viết',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
        )); 
            
//            Diem.GTN edit Footer 20/09/2017 (E)
        /**  end edit **/
            
//            Cuong.GTN edit Footer 22/09/2017 (S)
            register_sidebar(array(
    'name' => 'sidebar-solution',
    'id' => 'sidebar-solution',
    'description' => 'Khu vực sidebar hiển thị dưới mỗi bài viết',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>'
        )); 
}
add_action( 'widgets_init', 'smw_widgets_init' );
//**  them menu **/


if(!function_exists('vvc_menu')){
    function vvc_menu($menu){
        $menu = array(
           
            'theme_location' => $menu,
            'main-nav' => 'Main Navigation',
        
        );
        wp_nav_menu($menu);
    }
}

/** lấy menu * */
if(!function_exists('vvc_header')){
    function vvc_header(){?>
          <div class="site-name">
            <?php
            if(is_home()){
                printf('<h1><a href="%1$s"> %2$s</a></h1>',
                get_bloginfo('url'),
                get_bloginfo('sitename')
            );
                
            }else{
                  printf('<p><a href="%1$s"> %2$s</a></p>',
                get_bloginfo('url'),
                get_bloginfo('sitename')
            );
            }
            ?>
                </div>
                    <?php
    }
}

add_action( 'customize_register', function( $wp_customize ) {
    $opt_in_partials = array_filter( array(
        $wp_customize->selective_refresh->get_partial( 'blogname' ),
        $wp_customize->selective_refresh->get_partial( 'blogdescription' )
    ) );
    foreach ( $opt_in_partials as $partial ) {
        $partial->type = 'inline_editable';
    }
}, 100 );

/** nhúng css và js **/

if(!function_exists('vvc_style')){
    function vvc_style(){
        
        /**     nhúng file style.css    * */
        wp_register_style('main-style', get_template_directory_uri(). "/style.css","all");
        wp_enqueue_style('main-style');
        
         /**    nhúng file css    * */
        
        
        wp_register_style('vvc_home',  get_template_directory_uri(). "/templates-parts/css/vvc_home.css","all");
        wp_enqueue_style('vvc_home');
       
            /**       css services      * */
        wp_register_style('vvc_services',  get_template_directory_uri(). "/templates-parts/css/vvc_services.css","all");
        wp_enqueue_style('vvc_services');
        /** css contact **/
        wp_register_style('vvc_product',  get_template_directory_uri(). "/templates-parts/css/vvc_product.css","all");
        wp_enqueue_style('vvc_product');
        
        /**       css product      * */
        
        wp_register_style('vvc_contact',  get_template_directory_uri(). "/templates-parts/css/vvc_contact.css","all");
        wp_enqueue_style('vvc_contact');
        
         /**       css solution     * */
        
        wp_register_style('vvc_solution',  get_template_directory_uri(). "/templates-parts/css/vvc_solution.css","all");
        wp_enqueue_style('vvc_solution');
        
        /**   Css About Us * */
        wp_register_style('vvc_abouts',  get_template_directory_uri(). "/templates-parts/css/vvc_abouts.css","all");
        wp_enqueue_style('vvc_abouts');
        
        /**         * */
        wp_register_style('navigator',  get_template_directory_uri(). "/templates-parts/css/navigator.css","all");
        wp_enqueue_style('navigator');
       
        
        /**     nhúng file bootstrap.css    * */
        wp_register_style('bottstrap',  get_template_directory_uri(). "/templates-parts/css/bootstrap.min.css","all");
        wp_enqueue_style('bottstrap');
        /**    Nhúng font awesome     * */
        wp_register_style('font-awesome',  get_template_directory_uri(). "/templates-parts/css/font-awesome.min.css","all");
        wp_enqueue_style('font-awesome');
        
        /**    Nhúng Font simple-line-icon     * */
        wp_register_style('font-simple-line',  get_template_directory_uri(). "/templates-parts/css/simple-line-icons.css","all");
        wp_enqueue_style('font-simple-line');
        
       
        //css trang about us
        wp_register_style('about-us_css',  get_template_directory_uri(). "/templates-parts/css/vvc_about-us.css","all");
        wp_enqueue_style('about-us_css');
        
        /**     nhúng Javascript    * */
        
       
        
        /**    nhúng bootstrap.min.js     * */
        
        wp_register_script('bootstrapJS-vvc',  get_template_directory_uri(). "/templates-parts/js/bootstrap.min.js","all");
        wp_enqueue_script('bootstrapJS-vvc');
        
       
      
       
        /**   Nhúng VVC_JS      * */
      
       wp_register_script('vvc_home',  get_template_directory_uri(). "/templates-parts/js/vvc-home-js.js");
       wp_enqueue_script('vvc_home');
       
       wp_register_script('navigator',  get_template_directory_uri(). "/templates-parts/js/navigator.js");
       wp_enqueue_script('navigator');
       
       
    }
}
add_action('wp_enqueue_scripts','vvc_style');

/**  remove width and height image admin **/

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
 
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}





/** Cập Nhật Thêm Chức Năng cho post type  * */

function wpmudev_create_post_type() {
    update_function_post_type('Post Page Product','page_product');
   


}
add_action( 'init', 'wpmudev_create_post_type' );




/**
 * Filter posts by Custom_post_type in admin
 */

add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {

 create_filter_custom_post_type('page_product', 'category_product');
 create_filter_custom_post_type('dichvu_it', 'catagory_dichvu');

}
/**
 * Filter posts by taxonomy categories_solution in admin
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
 global $pagenow;
 $post_type = 'page_solution'; // change to your post type
 $taxonomy = 'detail_solution'; // change to your taxonomy
 $q_vars = &$query->query_vars;
 if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
 $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
 $q_vars[$taxonomy] = $term->slug;
 }  
}
/**
 * Filter posts by taxonomy category_product in admin
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query2');
function tsm_convert_id_to_term_in_query2($query) {
 global $pagenow;
 $post_type = 'page_product'; // change to your post type
 $taxonomy = 'category_product'; // change to your taxonomy
 $q_vars = &$query->query_vars;
 if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
 $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
 $q_vars[$taxonomy] = $term->slug;
 }
}

/**
 * Filter posts by taxonomy category_product in admin
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query3');
function tsm_convert_id_to_term_in_query3($query) {
 global $pagenow;
 $post_type = 'dichvu_it'; // change to your post type
 $taxonomy = 'catagory_dichvu'; // change to your taxonomy
 $q_vars = &$query->query_vars;
 if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
 $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
 $q_vars[$taxonomy] = $term->slug;
 }
}


