<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://192.168.0.128/wp-content/themes/vvc_theme/templates-parts/images/vinx-logo.png" rel="shortcut icon">

    <?php
        if (!class_exists('lessc')) {
            require_once get_stylesheet_directory() . '/libs/lessc.inc.php';
        }
        /**  Home * */
        $less = new lessc;
        $less->compileFile(get_stylesheet_directory() . '/templates-parts/less/vvc_home.less', get_stylesheet_directory() . '/templates-parts/css/vvc_home.css');
        /**  services* */
        $less2 = new lessc;
        $less2->compileFile(get_stylesheet_directory() . '/templates-parts/less/vvc_services.less', get_stylesheet_directory() . '/templates-parts/css/vvc_services.css');

        /** contact * */

        $less3 = new lessc;
        $less3->compileFile(get_stylesheet_directory() . '/templates-parts/less/vvc_contact.less', get_stylesheet_directory() . '/templates-parts/css/vvc_contact.css');

        /**  product * */
     

        $less4 = new lessc;
        $less4->compileFile(get_stylesheet_directory() . '/templates-parts/less/vvc_product.less', get_stylesheet_directory() . '/templates-parts/css/vvc_product.css');

          /** vvc_about * */

        $less5 = new lessc;
        $less5->compileFile(get_stylesheet_directory() . '/templates-parts/less/vvc_abouts.less', get_stylesheet_directory() . '/templates-parts/css/vvc_abouts.css');
        
        
        ?>

        <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header>
        <div class="top-heaer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="title-vcc">
                            <p><?php dynamic_sidebar( 'title-header' ); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="phone-vvc"><i class="fa fa-phone"></i> (028)399-703-71</div>
                    </div>
                    <div class="col-sm-1">
                          <div class="languages">
                    <?php
                        $args = array(

                            
                            'dropdown' => 1,
                        );
                        pll_the_languages($args);

                        ?>

                </div>
                    </div>
                    
                </div>
                
              
              
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                
                <div class="logo">
                    <a href="<?php echo get_home_url();?>">
                            <img src="<?php echo get_theme_mod( 'vvc_theme', get_template_directory_uri() . '/templates-parts/images/vinx-logo.png' ); ?>" alt=""/>
                        </a>
                </div>
                <div class="main-menu">
                    <div id="main-menu-close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>

                    <nav class="navbar navbar-default" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php /* Primary navigation */
     wp_nav_menu( array(
       'theme_location' => 'primary-menu', //Menu location của bạn
       'depth' => 10, //Số cấp menu đa cấp
       'container' => 'div', //Thẻ bao quanh cặp thẻ ul
       'container_class'=>'collapse navbar-collapse navbar-ex1-collapse', //class của thẻ bao quanh cặp thẻ ul
       'menu_class' => 'nav navbar-nav', //class của thẻ ul
       'walker' => new wp_bootstrap_navwalker()) //Cái này để nguyên, không thay đổi
);
?>
                    </nav>

                </div>

                <div class="btn-menu">
                    <i class="fa fa-reorder"></i>
                </div>

            </div>
        </div>
            </div>
    </div>
    </header>
    <div class="overlay"></div>

    <script>
      
        var width = $('.container').width();
        
        if (width >= 991) {

            $(document).ready(function(){
  $("li").hover(function(){
    $(this).children('.dropdown-menu').stop().slideDown(300).css('transition', 'background-color 0.6s ease');
  }, function(){
    $(this).children('.dropdown-menu').stop().slideUp(100);
  });
})
        } else {
        
        };
      
    </script>