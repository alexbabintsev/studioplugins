//VARIABLE FOR YANDEX METRIKA YM
let ym_kode = 67870531;
//VARIABLE FOR YANDEX METRIKA YM
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
      if($('body').hasClass('body-home-page') || $('body').hasClass('body-transitions-page') || $('body').hasClass('body-text-animations-page') || $('body').hasClass('is_pl_product') || $('body').hasClass('body-any-page') || $('body').hasClass('body-download-page')){
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
            ym(ym_kode,'reachGoal','watch-demo');
            console.log('test 123');
            let modalIframe = $('.modal-video-2').find('iframe');
            let data_iframe = $(this).attr('data-iframe');
            console.log(data_iframe);
            let modalIframe_src ='https://www.youtube.com/embed/'+data_iframe+modalIframe.attr('data-src');
            modalIframe.attr('src', modalIframe_src);
            showModal('modal-video-2');
            modalIframe.addClass('popup-iframe')
            modalIframe[0].onload = function(){
                $(modalIframe)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
            };
         }else{
            ym(ym_kode,'reachGoal','watch-demo');
            if(smooth_scroll){
               var _href = $(this).attr("data-href");
               $("html, body").animate({ scrollTop: $(_href).offset().top -0+ "px" }, 500);
               if(!$('.play-demo-btn').hasClass('is-hidden')){
                  setTimeout(() => {
                     $('.play-demo-btn').click();
                  }, 500);
               }
            }
         }

      return false;
   });
});