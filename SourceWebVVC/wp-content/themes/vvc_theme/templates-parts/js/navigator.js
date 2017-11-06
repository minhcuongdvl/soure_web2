$(document).ready(function(){
   //header
    $(window).scroll(function(){
        if($(this).scrollTop() >= 60){
            $('.main-header').addClass('scroll-header');
        }else{
            $('.main-header').removeClass('scroll-header');
        }
    });
    $('.page_item li a').click(function(){
        $('.page_item li').removeClass('active');
        $(this).parent('li').addClass('active');
    });
    $('.btn-menu').click(function(){
        $('.main-menu').css({'transform': 'translateX(0px)'});
        $('#main-menu-close').css({'display':'block'});
        $('.overlay').css({'display':'block'});
    });
    $('#main-menu-close').click(function(){
        $(this).css({'display':'none'});
        $('.main-menu').css({'transform': 'translateX(-300px)'});
        $('.overlay').css({'display':'none'});
    }); 
});