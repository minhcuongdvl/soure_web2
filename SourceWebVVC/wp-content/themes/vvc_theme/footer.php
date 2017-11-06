<div class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-ribbon"><?php dynamic_sidebar( 'contact-footer' );?></div>
            <div class="row">
                <div class="col-md-6">
                  <?php dynamic_sidebar('vccfooter')?>
                </div>
                <div class="col-md-6">
                    <aside class="widget ">
                   
                        <div class="contact-info">
                            <div class="footer-maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.767741984164!2d106.66606815766309!3d10.805876608080599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924eb08e847%3A0x3e2b66e3fb7ceecb!2zMTAgUGjhu5UgUXVhbmcsIFBoxrDhu51uZyAyLCBUw6JuIELDrG5oLCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1507518457996" width="100%" height="200" frameborder="0" style="border:0 ; float: right;margin-bottom: 30px;" allowfullscreen></iframe>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-12">
                <div class="footer-left">
                    <p>© Copyright 2017. All Rights Reserved, Vinx Việt Nam</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div href="javascript:;" class="button_scroll2top" onclick="page_scroll2top()"><i class="fa fa-chevron-up"></i></div>
<script type="text/javascript">
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 200) {
            $('.button_scroll2top').show();
        } else {
            $('.button_scroll2top').hide();
        }
    });

    function page_scroll2top() {
        $('html,body').animate({
            scrollTop: 1
        }, 'slow');
    }
</script>
<?php wp_footer();?>
    </body>

    </html>