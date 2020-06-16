let modalPrev = null;
$(function() {

    $(document).on('click', '[data-modal]',function(e) {
        
        e.preventDefault();

        let newModal = $(this).data("modal");
        
        if ( $(".default-modal.is-active").length ) {
            if ( $(this).data('modal-prev').length ) {
                modalPrev = $(this).data('modal-prev');
                $(".default-modal.is-active").removeClass('is-active');
                setTimeout(function() {
                    showModal(newModal);
                    
                }, 300);
            }else{
                callbackClose();
                setTimeout(function() {
                    showModal(newModal);
                }, 300);
            }
        }else{
            let modal_video_iframe = $('.modal-video').find('iframe');
            if(newModal=='modal-video' && !modal_video_iframe.hasClass('loaded')){
                let video_src = modal_video_iframe.attr('data-src');
                modal_video_iframe.attr('src', video_src);
                modal_video_iframe.addClass('loaded');
                setTimeout(function() {
                    showModal(newModal);
                }, 300);
            }else{
                showModal(newModal);
            }
            
        }
    });
    $(document).on('click', '.default-modal__close, [data-modal-close]', function() {
        
        callbackClose();


    });
    $("html").on('click', function(e) {
        if (!$(e.target).closest(".default-modal__content").length && $(".default-modal").hasClass("is-active")) {
            callbackClose();
        }
    });
    document.addEventListener('keydown', function (e) {
        if(e.key==="Escape"||e.key==='Esc'||e.keyCode===27) {
            callbackClose();
        }
    });

});
function showModal(e) {
    setTimeout(function() {
        $("body").addClass("modal-open");
        let modal = $("." + e + "");

        ///////////////////
        modalOpenMac();
        ///////////////////
        if (hasScrollbar()) {
            let scrollWidth = getScrollbarWidth();
            $("html").css({
                "margin-right": scrollWidth
            });
            if($('body').hasClass('body-home-page')){
                $('.header').css({
                    "padding-right": scrollWidth
                });
            }

            modal.addClass("is-active");
        } else {
            modal.addClass("is-active");
        }
        $('html').addClass('no-scroll');

        let isIE = /*@cc_on!@*/false || !!document.documentMode;
        if (isIE === true) {
            if ( modal.find(".default-modal__content").outerHeight() > $(window).height() ) {
                modal.css("display", "block");
            }else {
                modal.removeAttr("style");
            }
        }
    }, 0);
}
function callbackClose() {

    
    if ( modalPrev ) {
        $('.default-modal.is-active').removeClass('is-active');
        // setTimeout(function() {
        $('.'+ modalPrev +'').addClass('is-active');
        // }, 300);
        modalPrev = null;
        return false;
    }
    if ($("body").hasClass("modal-open") && !$("body").hasClass("mob-nav-open")) {
        $("body").removeClass("modal-open");
        $(".default-modal").removeClass("is-active");
        setTimeout(function () {
            $('html').removeClass('no-scroll');
            $('html').css('margin-right', '');
            $('.header').css('padding-right', '');
            /////////////////////
            modalCloseMac();
            /////////////////////
        }, 300);
    }else if ( $("body").hasClass("mob-nav-open") ){
        $("body").removeClass("modal-open");
        $(".default-modal").removeClass("is-active");
    }
    closeYoutube();
    

    
    
}
function closeYoutube(){
    
    var youtubePlayer = document.getElementsByClassName('youtube-player')[0];
    youtubePlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
}