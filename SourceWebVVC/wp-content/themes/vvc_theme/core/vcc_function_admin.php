<?php
/**  Minh Cường Creat 27/09/2017 * */

/**  Cấu hình Editor Admin * */
function ilc_mce_buttons($buttons){
  array_push($buttons,
     "backcolor",
     "anchor",
     "hr",
     "sub",
     "sup",
     "fontselect",
     "fontsizeselect",
     "styleselect",
     "cleanup"
);
  return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");

/**  ẩn - hiện giao diện  Admin menu **/

function vnkings_admin_menus() {
   remove_menu_page( 'index.php' ); // Menu Bảng tin
   //remove_menu_page( 'edit.php' ); // Menu Bài viết
   remove_menu_page( 'upload.php' ); // Menu Media
   //remove_menu_page( 'edit.php?post_type=page' ); // Menu Trang
   remove_menu_page( 'edit-comments.php' ); // Menu Bình luận
   //remove_menu_page( 'themes.php' ); // Menu Giao diện
   //remove_menu_page( 'plugins.php' ); // Menu Plugins
   remove_menu_page( 'users.php' ); // Menu Thành viên
   remove_menu_page( 'tools.php' ); // Menu Công cụ
   //remove_menu_page( 'options-general.php' ); // Menu cài đặt
   remove_menu_page( 'wpcf7' ); // Xóa Menu Contact form 7
   remove_menu_page( 'wp-google-maps-menu' ); // Xóa Menu google maps
   //remove_menu_page( 'mlang'); // Xóa Menu Lang
   remove_menu_page( 'cptui_manage_post_types'); 

}
add_action( 'admin_menu', 'vnkings_admin_menus' );

/** lấy Url Hiện Tại của page    * */
function getCurrentPageURL() {
    $pageURL = 'http';
 
    if (!empty($_SERVER['HTTPS'])) {
      if ($_SERVER['HTTPS'] == 'on') {
        $pageURL .= "s";
      }
    }
 
    $pageURL .= "://";
 
    if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
      $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
 
    return $pageURL;
  }
  
  /**  lấy ID của catagory - categories_solution - * */
function get_category_by_slug_so( $slug  ) {
	$category = get_term_by( 'slug', $slug, 'categories_solution' );
	if ( $category )
        return $category->term_id;
    return 0;
}
/**  lấy ID của catagory - category_product -- * */
function get_category_by_slug_so2( $slug  ) {
	$category = get_term_by( 'slug', $slug, 'category_product' );
	if ( $category )
        return $category->term_id;
    return 0;
}

/**  cap nhật chức năng cho custom_post_type - hiển thị bài post theo catagory ra page archive **/

function update_function_post_type($name,$post_type){
    $labels = array(
 		 'name' => $name, //Tên post type dạng số nhiều
                    
    	
    );

    //register post type
	register_post_type( $post_type, array(
                'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		
		)
	);
}