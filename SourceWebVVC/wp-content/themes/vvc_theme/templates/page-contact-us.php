<?php
/*
    Template Name:page-contact
 */
?>
    <?php get_header();?>

        <div class="container">
            <div class="vcc_contacts">
               
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="left-strip"></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?php get_template_part("/templates-parts/page-contact/content","three2")?>
                                            <?php get_template_part("/templates-parts/page-contact/content","two")?>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-sm-12">
                                           <div class="contact_details">
                        <p class="contact_text"></p>
                         
                    </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>

                    
                  
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="left-strip"></div> 
                            <?php get_template_part("/templates-parts/page-contact/content","three3")?>
                                <div class="module-1014">

                                    <?php echo do_shortcode("[contact-form-7 id='613' title='Form Contact']")?>

                                </div>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        <?php get_footer();?>