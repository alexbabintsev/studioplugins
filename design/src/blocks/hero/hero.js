$(function(){
   let $dwl_link = $('.dwl_link');
   $dwl_link.on('click', function(e){
      // $('.dwl_temp').remove();
      // $(this)[0].insertAdjacentHTML('afterend', '<a class="dwl_temp" download style="display: none" href="'+$(this).attr('data-dwl')+'"></a>');
      // $('.dwl_temp')[0].click();
      let location  = $(this).attr('data-dwl');
      setTimeout(function(){
         window.location.href= location;
      });

   });
});