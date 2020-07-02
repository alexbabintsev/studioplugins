$(function(){
   var waytocreate__slider = new Swiper('.waytocreate__slider', {
      loop: false,
      slidesPerView: "auto",
      // spaceBetween: 100,
      speed: 500,
      grabCursor: true,
      pagination: {
         el: '.swiper-pag',
      }
      // effect: 'fade',
      // fadeEffect: {
      //    crossFade: true
      // },
   });




   let $way = $('.img-way');
   let addTranslateX = 0;
   let addTranslateY = addTranslateX*0.36666;
   let temporaryScroll = 0;
   let maxTranslateX = 100;
   let minTranslateX = -100;
   function scrollTracking(){
      var wt = $(window).scrollTop();
      var wh = $(window).height();
      var et = $way.offset().top;
      var eh = $way.outerHeight();
   
      if (wt + wh >= et && wt + wh - eh * 2 <= (et + (wh - eh))){
         if(temporaryScroll < wt){
               // console.log('down');
               incrementX();

               $way.css({
                  "transform":"translate("+ addTranslateX*5+ "px,"+addTranslateY*5+"px)"
               });
               // console.log("addTranslateX    "+ addTranslateX*10+ " addTranslateY   "+addTranslateY*10);
               

         }else{
            // console.log('up');
            decrementX();

            $way.css({
               "transform":"translate("+ addTranslateX*5+ "px,"+addTranslateY*5+"px)"
            });
            // console.log("addTranslateX    "+ addTranslateX*10+ " addTranslateY   "+addTranslateY*10);

         }
      } else {
         incrementX();
            addTranslateX=0;
      }
      temporaryScroll = wt;
   }
   
   $(window).scroll(function(){
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





});