let stopScrollSlider = true;
$(function(){
   if($('.waytocreate__slider').length){
   var waytocreate__slider = new Swiper('.waytocreate__slider', {
      loop: false,
      slidesPerView: "auto",
      // spaceBetween: 100,
      speed: 500,
      grabCursor: true,
      pagination: {
         el: '.swiper-pag',
      },
      on:{
         reachBeginning: function () { 
            console.log('test cstart');

            setTimeout(function(){
               stopScrollSlider = false;
            }, 500)

         },
         reachEnd: function () { 
            console.log('test end');

            setTimeout(function(){
               stopScrollSlider = false;
            }, 500)
         },
         fromEdge: function(){
            stopScrollSlider = true;
         },
      },
      // effect: 'fade',
      // fadeEffect: {
      //    crossFade: true
      // },
   });
   //NEXT SLIDE ON MOUSEWHEEL
   let fp_slider = $('.waytocreate__slider')[0];

   function addOnWheel(elem, handler) {
      if (elem.addEventListener) {
         if ('onwheel' in document) {
            elem.addEventListener("wheel", handler);
         } else if ('onmousewheel' in document) {
            elem.addEventListener("mousewheel", handler);
         } else {
            elem.addEventListener("MozMousePixelScroll", handler);
         }
      } else { 
         fp_slider.attachEvent("onmousewheel", handler);
      }
      }

               addOnWheel(fp_slider, function(e) {
         if ($('.waytocreate__slider:hover').length != 0) {
            var delta = e.deltaY || e.detail || e.wheelDelta;

            if (delta > 0){
               waytocreate__slider.slideNext();
            }else{
               waytocreate__slider.slidePrev();
            }
            if(stopScrollSlider){
               e.preventDefault();
            }else{
               console.log('permit scroll');
            }
         }
      });
      }



   if($('.img-way').length){
      let $way = $('.img-way');
      let $way_img = $('.img-way__img');
      let addTranslateX = 0;
      let addTranslateY = addTranslateX*0.36666;
      let temporaryScroll = 0;
      let maxTranslateX = 100;
      let minTranslateX = -100;
      if($(window).width() <= 500){
         addTranslateX =100;
         addTranslateY = addTranslateX*0.36666;
         $way.css({
            "transform":"translate("+1000+ "px,"+1000*0.36666+"px)"
         });
      }
      function scrollTracking(){
         var wt = $(window).scrollTop();
         var wh = $(window).height();
         var et = $way_img.offset().top;
         var eh = $way_img.outerHeight();
         if($(window).width() <= 500){
            minTranslateX = -70;
            maxTranslateX = 70;
         }else{
            minTranslateX = -100;
         }
         if($(window).width() >= 2400){
            maxTranslateX = 62;
         }
         if (wt + wh >= et && wt + wh - eh * 2 <= (et + (wh - eh))){
            if(temporaryScroll < wt){
               incrementX();
            }else{
               decrementX();
            }
            $way.css({
               "transform":"translate("+ addTranslateX*5+ "px,"+addTranslateY*5+"px)"
            });
         } else {
            incrementX();
            addTranslateX=0;
         }
         temporaryScroll = wt;
      }
      $(window).on('scroll',function(){
         scrollTracking();
      });
         
      $(document).ready(function(){ 
         scrollTracking();
      });
      function incrementX(){
         if(addTranslateX>=minTranslateX){
            addTranslateX=(addTranslateX -1);
            addTranslateY = addTranslateX*0.36666;
         }
      }
      function decrementX(){
         if(addTranslateX<=maxTranslateX){
            addTranslateX=(addTranslateX +1);
            addTranslateY = addTranslateX*0.36666;
         }
   
      }
   }
  
   // const container = document.querySelector('.img-way');

   // window.addEventListener('scroll', () => {
   //    console.log(window.pageYOffset);
      
   //     container.style.transform = `
   //         translate(${-Math.floor(window.pageYOffset + 120)}px,
   //         ${-Math.floor(window.pageYOffset * 0.36666 + 120 )}px)
   //     `;
   // });




});