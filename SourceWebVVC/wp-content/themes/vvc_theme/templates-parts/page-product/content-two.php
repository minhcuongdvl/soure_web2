
 <div class="module-1007">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <div class="left-strip"></div>
               <div class="row">
                   
                   <div class="col-sm-12">
                       <div class="content">
                      <h3>Sản phẩm nổi bật!</h3>
                      <p class="center left-block"></p>
                   </div>
                  </div>
               </div>
               <?php
               $args_product_query = array(
    'post_type'    =>'page_product',
     'order' => 'DESC', 
);
$product_query = new WP_Query( $args_product_query );    
    
?>
        <div class="row">
             
<?php if ( $product_query->have_posts() ) : while ( $product_query->have_posts() ) : $product_query->the_post(); ?>
            
                   
                   <div class="col-md-6">
                   <div class="content">
                      <div class="box">
                        <div class="maxheight">
                            <div class="box_inner">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon left-block">
                                             <?php the_post_thumbnail();?>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                         <div class="blocks-list_text">
                                <h5>
                                    <a href="<?php echo get_permalink()?>" style="color: <?php
                                   
            $tp_field = get_post_meta(get_the_ID(),'color_tittle',true);
            echo $tp_field ;
             
        ?>"><?php the_title()?></a>
                                </h5>
                                           <?php the_excerpt()?>                            
                            </div>
                                    </div>
                                </div>
                           
                           
                        </div>
                        </div>
                    </div>
                   </div>
                  </div>
                     
                   
               

        <?php endwhile;?>
          
            </div> 
            <?php else: ?>
                                                      
     <?php _e('<p style="text-align: center;">Đang Phát Triển<p>'); ?>
                                                       
<?php endif; ?>

             
               
              
               </div>
            </div>
        </div>
    </div>


    





