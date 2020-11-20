$(function(){
   let $dwl_link = $('.dwl_link');
   $dwl_link.on('click', function(e){
      e.preventDefault();
      let popup = $('.modal-pre-dwl');
      let a_href = $(this).attr('href');

      //ADDING DWL LINK TO POPUP 
      popup.find('#temporary_popup_link').remove();
      popup.append('<a style="display: none" id="temporary_popup_link" href="'+a_href+'" download></a>')

      //YANDEX METRIKA
      let link_txt = $(this).find('.btn__inner').text();
      if(link_txt.includes('Download for MacOS')){
         ym(ym_kode,'reachGoal','download-macos')
      }else if (link_txt.includes('Download for Windows')){
         ym(ym_kode,'reachGoal','download-win')
      }

      // $('.dwl_temp').remove();
      // $(this)[0].insertAdjacentHTML('afterend', '<a class="dwl_temp" download style="display: none" href="'+$(this).attr('data-dwl')+'"></a>');
      // $('.dwl_temp')[0].click();

      //redirect
      // let location  = $(this).attr('data-dwl');
      // if (location.length) {
      //    setTimeout(function(){
      //       window.location.href= location;
      //    },2000);
      // }
      //redirect
   });



   $('.modal-pre-dwl .main-form__submit-btn').on('click', function(e){
      e.preventDefault();
      //submiting form
      let email = $(this).closest('.main-form').find('input[name="email"]').val();
      if(email.length){
         //$(this).closest('.main-form').submit();
          $.post(myajax.url,{action: 'dwnl_to_mailchimp',email:email},function (data) {});
      }

      //download file
      let location_dwl = $('.modal-pre-dwl').find('#temporary_popup_link').attr('href');
      window.location.href= location_dwl;
      //redirect
      let location  = '/downloaded/';
      if (location.length) {
         setTimeout(function(){
            window.location.href= location;
         },2000);
      }
   })
   // $('.temporary_popup_link').on('click', function(e){
   //    let location  = '/downloaded/';
   //    if (location.length) {
   //       setTimeout(function(){
   //          window.location.href= location;
   //       },2000);
   //    }
   // })
});