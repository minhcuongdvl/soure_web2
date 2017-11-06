<?php get_header();?>

<?php get_template_part('/templates-parts/banner_home/content','one')?>
<?php

$args_home_query = array(
    'post_type'    =>'post',
     'order' => 'ASC', 
);
$home_query = new WP_Query( $args_home_query );

?>
<?php if ( $home_query->have_posts() ) : while ( $home_query->have_posts() ) : $home_query->the_post(); ?>
        <?php the_content();?>
    <?php endwhile; else: ?>                                            
        <?php _e('Đang Phát Triển'); ?>                                                    
<?php endif; ?>

<?php get_footer();?>
