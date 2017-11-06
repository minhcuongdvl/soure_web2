<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage vvc_themes
 * @since vvc_themes 1.0
 */
?>
  <style>
                .btn-icon {
                    transform: rotate(180deg);
                    position: relative;
                    top: 3px;
                    transition: 0.4s;
                }
            </style>
            <script>
                $(document).ready(function () {
                    $(".button").click(function () {
                        $(this).parent().next().slideToggle();
                        $(this).children().toggleClass("btn-icon");
                    });
                    $(".cong").click(function () {
                        $(this).parent().next().slideToggle();
                    });
                });
            </script>

 
                            <div class="sidebar">
                                <div class="side-items">
                                    <div class="side-title">
                                        <span>CATEGORIES</span>
                                        <button class="button">
                                            <i class="fa fa-caret-up"></i>
                                        </button>
                                        <div style="clear:both;"></div>
                                    </div>
                                                                   <?php
                                                                $taxomonies	=	get_categories( 
                                                                array('taxonomy' 	 => 'category_product', // thay taxonomy của bạn (tìm trong functions.php hoặc các file includes)
                                                               'type'		 =>	'page_product',// thay product bằng custom post type của bạn
								'orderby'       => 'id',
								'order'          => 'DESC',	
								 'hide_empty' => 0
						));
?>
<div class="side-cont">
<?php foreach($taxomonies as $taxomony): ?>
<li>
    <a href="<?php echo get_term_link($taxomony->slug, 'category_product');?>">
             <?php echo $taxomony->name ; ?>
            (<?php echo $taxomony->count; ?>)
    </a>	
</li>
<?php endforeach;?>
</div>

</div>
                                </div>
                              

                        