document.addEventListener('DOMContentLoaded', function() {

    let helpVideoBtns = document.querySelectorAll('.help-video-btn');
    helpVideoBtns && helpVideoBtns.forEach(function(el) {
       el.addEventListener('click', function() {
           let video = this.dataset.video;
           if (!this.querySelector('iframe')) {
               this.insertAdjacentHTML('afterbegin',video);
               let iframe = $(this).find('iframe');
               this.classList.add('is-hidden');
               iframe[0].onload = function(){
                   $(iframe)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
               };
               // var iframeDoc = $(iframe)[0].contentDocument || $(iframe)[0].contentWindow.document;
           }
       });
    });


    // $('.article__video-play-icon').on('click', function () {
    //     $(this).parent().addClass('hided');
    //     var iframe = $(this).parents('.article__video').find('iframe');
    //     $(iframe)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    // });

});