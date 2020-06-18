$(function() {

   //BURGER
   let burger = $('.burger');
   let mob_menu = $('.header__right');
   
   burger.on('click', function() {
         $(this).toggleClass('burger-active');
         mob_menu.toggleClass('mob_menu_active');
         $('body').toggleClass('overflow-hidden');
         $('.header').toggleClass('header-mob-menu');
   });


   //HEADER BG ON SLROLL
   $(window).scroll(function(){
      var scrollTop = $(window).scrollTop();
      if($('body').hasClass('body-home-page') || $('body').hasClass('body-transitions-page') || $('body').hasClass('body-text-animations-page') ||$('body').hasClass('is_pl_product')){
         if(scrollTop > 60){
            $('.header').addClass('header-scroll');
         }else{
            $('.header').removeClass('header-scroll');
         }
      }

   });
});