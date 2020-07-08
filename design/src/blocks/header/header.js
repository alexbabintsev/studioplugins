$(function() {

   //BURGER
   let burger = $('.burger');
   let mob_menu = $('.header__right');
   
   burger.on('click', function() {
         $(this).toggleClass('burger-active');
         mob_menu.toggleClass('mob_menu_active');
         $('body').toggleClass('overflow-hidden');
         $('.header').toggleClass('header-mob-menu');
         $('.section-decor-product').toggleClass('is-active');
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
   //ПЛАВНЫЙ СКРОЛЛ ПО ЯКОРЯМ
   //ПЛАВНЫЙ СКРОЛЛ ПО ЯКОРЯМ
   let smooth_scroll = false;
   setTimeout(function(){
      smooth_scroll = true;
   }, 1000);
   function register_whath_demo_event (){
      
   }
   $("a[data-nav='nav']").on('click',function (e) {
      e.preventDefault();
      if($(this).hasClass('hero-2-content__video') && $(window).width()<1199){
         console.log('popup');
         let modalVideo = $('.modal-video-2').find('video');
         mainvideoPlay(modalVideo);
         showModal('modal-video-2');
      }else{
         if(smooth_scroll){
            var _href = $(this).attr("data-href");
            $("html, body").animate({ scrollTop: $(_href).offset().top -0+ "px" }, 500);
         }
      }
      return false;
   });
});