<?php
/*
  Template Name: About Us
 */
?>

    <?php get_header(); ?>
       
            <div class="container">
                <div class="vvc_about-us">
                    <div class="row">
                        <?php $arg = array(
    'post_type'=>'about_us',
    'order'=>'ASC',
);

    $about_query = new WP_Query($arg);

?>
<?php if ( $about_query->have_posts() ) : while ( $about_query->have_posts() ) : $about_query->the_post(); ?>
    <?php get_template_part('content', get_post_format())?>
        <?php endwhile; else: ?>
            <p>
                <?php _e('Đang Phát Triển'); ?>
            </p>
        <?php endif; ?>
                </div>
            </div>
         </div>
<?php get_footer(); ?>