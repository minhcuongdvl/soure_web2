<?php get_header();?>

    <?php
    
                  $url = getCurrentPageURL();
                   $arr = (explode("/",$url));
                   /**  * */
                   $cout = count($arr) - 2;
                   $cout2 = count($arr) - 3;
                   /** Lấy slug của catagory theo độ dài mảng * */
                   $name_slug = $arr[$cout];
                   $name_taxonomy = $arr[$cout2];
                   
                  ?>

        <?php $cat_id_solution = get_category_by_slug_so($name_slug);
        ?>
        <?php  $url_solution =  get_category_link($cat_id_solution);
 
        ?>
        
        <?php $cat_id_product = get_category_by_slug_so2($name_slug);

        ?>
        <?php  $url_product  =  get_category_link($cat_id_product);?>

                        <div class="container">
                            <div class="row">
                                 <div class="col-sm-12">
                                <div class="vvc_contact_head">

                                    <h1 class="page-title"><?php echo strtoupper(str_replace("-"," ",$name_slug)) ?></h1>
                                    <p class="breadcrum hidden-xs">Home / Product /
                                        <?php echo str_replace("-"," ",$name_slug);?>
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php
if(strcmp($url, $url_solution) == 0):?>
                            <div class="vcc_solution">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="content-left">
                                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                    <?php the_content();?>

                                                        <?php endwhile; else: ?>
                                                            <p>
                                                                <?php _e('Sorry, no posts matched your criteria.'); ?>
                                                            </p>
                                                            <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="sidebar-solution">
                                                <?php dynamic_sidebar('sidebar-solution')?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php elseif(strcmp($url, $url_product) == 0):?>

                                <div class="container">
                                    <div class="row">
                                         <div class="col-sm-12">
                                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                            <?php the_content();?>

                                                <?php endwhile; else: ?>
                                                    <p>
                                                        <?php _e('Sorry, no posts matched your criteria.'); ?>
                                                    </p>
                                                    <?php endif; ?>
                                    </div>
                                    </div>
                                </div>
                                <?php else:?>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                <?php the_content();?>

                                                    <?php endwhile; else: ?>
                                                        <p>
                                                            <?php _e('Đang Phát Triển'); ?>
                                                        </p>
                                                        <?php endif; ?>
                                        </div>
                                        </div>
                                    </div>
                                    <?php endif;?>
<?php get_footer();?>