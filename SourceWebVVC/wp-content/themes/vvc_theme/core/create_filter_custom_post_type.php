<?php
function create_filter_custom_post_type($post_type,$taxonomy){
 global $typenow;
 // change to your post type
 // change to your taxonomy
 if ($typenow == $post_type) {
 $selected = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
 $info_taxonomy = get_taxonomy($taxonomy);
 wp_dropdown_categories(array(
 'show_option_all' => __("Lọc {$info_taxonomy->label}"),
 'taxonomy' => $taxonomy,
 'name' => $taxonomy,
 'orderby' => 'name',
 'selected' => $selected,
 'show_count' => true,
 'hide_empty' => true,
 ));
 };
}
