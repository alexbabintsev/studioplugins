// const { default: Swiper } = require("swiper");

$(function(){
    let all_video = document.querySelectorAll('.tr-folder-slider video');
    let videoObs = new IntersectionObserver(entries => {
        entries.forEach (entry => {
            let video = entry.target;
            let source = video.querySelector('source');
            if (entry.isIntersecting){
                video.load();
                source.setAttribute('src', source.dataset.src);
                video.play();
                video.classList.add('loaded');
                video.parentNode.querySelector('img').style.display = 'none';
            }else{
                // console.log('test empty attr');
                source.setAttribute('src', '');
                video.load();
            }
        })
    })
    all_video.forEach(v=>{
        videoObs.observe(v);
    });

    // EFFECTS FOLDER NAVIGATION
    let folder_nav_item = $('.folder-nav__item');
    let tr_folder_slider = $('.tr-folder-slider');
    folder_nav_item.on('click', function(){
        let singleindex = $(this).attr('data-singleindex');
        let groupindex = $(this).attr('data-groupindex');

        if($(window).width()<= 767){
            
            if($(this).parent().parent().hasClass('is-active')){
                // document.querySelectorAll('.tr-folder-slider.is-active video').forEach(v=>v.pause());
                $(this).siblings().removeClass('is-active');
                $(this).addClass('is-active');
                $(this).parent().slideToggle();
                tr_folder_slider.removeClass('is-active');
                $('.tr-folder-slider[data-singleindex="'+singleindex+'"][data-groupindex="'+groupindex+'"]').addClass('is-active');  
                set_folder_select();
            }
        }else{
            // document.querySelectorAll('.tr-folder-slider.is-active video').forEach(v=>v.pause());
            $(this).siblings().removeClass('is-active');
            $(this).addClass('is-active');
            tr_folder_slider.removeClass('is-active');
            $('.tr-folder-slider[data-singleindex="'+singleindex+'"][data-groupindex="'+groupindex+'"]').addClass('is-active');  
        }

    });
    //IF NO SUBFOLDERS
    let no_subfolders = $('.no-subfolders');
    no_subfolders.on('click', function(){
        //PAUSE странно
        // let active_slider = document.querySelector('.tr-folder-slider.is-active');
        // console.log(active_slider);

        let groupindex = $(this).attr('data-groupindex');
        tr_folder_slider.removeClass('is-active');
        $('.tr-folder-slider[data-singleindex="0"][data-groupindex="'+groupindex+'"]').addClass('is-active');  
    });



    //SLIDETOGGLE FOLDER-NAV 
     let folder_nav_group__name = $('.folder-nav-group__name');
     folder_nav_group__name.on('click', function(e){
        $(this).parent().siblings().find('.folder-nav').slideUp();
        $(this).siblings('.folder-nav').slideToggle();
        $(this).toggleClass('is-active');
        //MAKE ACTIVE APPROPRIATE SLIDER ON DESCTOP
        if(!$(this).hasClass('no-subfolders') && !$(window).width()<= 767){
            let singleindex = $(this).siblings('ul').find('li.is-active').attr('data-singleindex');
            let groupindex = $(this).siblings('ul').find('li.is-active').attr('data-groupindex');
            tr_folder_slider.removeClass('is-active');
            $('.tr-folder-slider[data-singleindex="'+singleindex+'"][data-groupindex="'+groupindex+'"]').addClass('is-active');
        }
     });
    $('.body-download-page .no-subfolders').on('click', function(){
        $(this).siblings('.no-subfolders').removeClass('is-active');
        $(this).addClass('is-active');
    });

    //SET VALUE OF FOLDER SELECTOR ON MOBILE-BIG 
    function set_folder_select(){
        if($(window).width()<= 767){
            let group_length = $('.effects-content__body-left').find('.folder-nav-group').length;
            for(let i=1; i<= group_length; i++ ){
               let curr_folder_active =  $('.folder-nav-group[data-groupindex="'+i+'"]').find('.folder-nav__item.is-active').find('p').text();
               if(!curr_folder_active==""){
                    $('.folder-nav-group[data-groupindex="'+i+'"]').find('.groupname').text(curr_folder_active);
               }
            }
        }
    }

    //FOLDER GROUP TOP MOBILE
    let folder_group_mob__item = $('.folder-group-mob__item');
    folder_group_mob__item.on('click', function(){
        if ($(this).hasClass('no-subfolders-mob')){
            $(this).siblings().removeClass('is-active');
            $(this).addClass('is-active');
            let folder_gr_mob_index = $(this).attr('data-groupindex');
            $('.folder-nav-group').removeClass('is-active');
            $('.folder-nav-group[data-groupindex="'+folder_gr_mob_index+'"]').addClass('is-active');
            tr_folder_slider.removeClass('is-active');
            $('.tr-folder-slider[data-singleindex="0"][data-groupindex="'+folder_gr_mob_index+'"]').addClass('is-active');  

        }else{
            $(this).siblings().removeClass('is-active');
            $(this).addClass('is-active');
            let folder_gr_mob_index = $(this).attr('data-groupindex');
            $('.folder-nav-group').removeClass('is-active');
            $('.folder-nav-group[data-groupindex="'+folder_gr_mob_index+'"]').addClass('is-active');
            let current_singlge_index = $('.folder-nav-group[data-groupindex="'+folder_gr_mob_index+'"]').find('.folder-nav__item.is-active').attr('data-singleindex');
            tr_folder_slider.removeClass('is-active');
            $('.tr-folder-slider[data-singleindex="'+current_singlge_index+'"][data-groupindex="'+folder_gr_mob_index+'"]').addClass('is-active'); 
        }
    });
    set_folder_select();
    $(window).on('resize', function(){
        set_folder_select();

    });

    //EFFECTS FOLDER STARS
    let folder_star = $('.folder-box-char__item-star');
    folder_star.on('mouseenter', function(){
        if(!isMobile.any()){
            if(!$(this).hasClass('selected')){
                let star_dark = $(this).find('.star-dark');
                let star_light = $(this).find('.star-light');
                star_light.addClass('is-active');
                star_dark.removeClass('is-active');
            }
        }
    });
    folder_star.on('mouseleave', function(){
        if(!isMobile.any()){
            if(!$(this).hasClass('selected')){
                let star_dark = $(this).find('.star-dark');
                let star_light = $(this).find('.star-light');
                star_light.removeClass('is-active');
                star_dark.addClass('is-active');
            }
        }
    });
    folder_star.on('click', function(){
        let star_dark = $(this).find('.star-dark');
        let star_light = $(this).find('.star-light');
        star_light.toggleClass('selected-light');
        star_dark.toggleClass('selected-dark');
        star_light.parent().toggleClass('selected');
    });

    //RESIZE DROPDOWN BLOCK
    let resize_button = $('.effects-content__footer-resize');
    resize_button.hover(function(){
        // $(this).find('.resize-text').toggleClass('is-active');
        $(this).find('.effects-content__footer-drop').toggleClass('is-active');
    })
    let add_button = $('.effects-content__footer-add');
    add_button.hover(function(){

        $(this).find('.effects-content__footer-drop').toggleClass('is-active');
    })
    let sound_button = $('.effects-content__footer-sound');
    sound_button.hover(function(){

        $(this).find('.effects-content__footer-drop').toggleClass('is-active');
    })
    let scroll_button = $('.effects-content__footer-scrollbar');
    scroll_button.hover(function(){
        // console.log('test');
        
        $(this).find('.effects-content__footer-drop').toggleClass('is-active');
    })

//VIDEO
    //LZAY LOAD VIDEO 
    // let active_slider_videos = $('.txt_video');
    // active_slider_videos.each(function(){
    //     let active_slider_video_src = $(this).find('source').attr('data-src');
    //     $(this).find('source').attr('src', active_slider_video_src)
    // });
    
    

    
    // //HOVER ON VIDEO
    // $("body").on("mouseover", ".txt_video", function(){
    //     this.load();
    //     this.play();
    //     $(this).css( "background-color", "black" );
    //     let vidoe_poster = $(this).siblings('img');
    //     setTimeout(function(){
    //         vidoe_poster.css('display', 'none');
    //     }, 100);
        
        
    //   });
    //   $("body").on("mouseleave", ".txt_video", function(){
    //     this.pause();
    //   })
    //MAIN VIDEO
    // let firstlink = true;
    // let $main_video = $('.main-video');
    // let main_video = $('.main-video')[0];
    // $('.hero-video-link').on('click', function(){
    //     if(!$main_video.hasClass('loaded')){
    //         main_video_src = $main_video.attr('data-src');
    //         $main_video.attr('src', main_video_src);
    //         $main_video.find('source').attr('src', main_video_src);
    //         $main_video.addClass('loaded');
    //     }

    //     if(firstlink==true){
    //         main_video.play();
    //         firstlink = false;
    //     }else{
    //         main_video.pause();
    //         firstlink = true;
    //     }
        
    // });
    //VOLUME DEMO VIDEO
    let demo_vol = $('.creative__volume');
    demo_vol.on('click', function(){
        if($(this).hasClass('is-active')){
            let video = $(this).siblings('video')[0];
            $(this).removeClass('is-active');
            video.muted = !video.muted;
            console.log('muted');

        }else{
            let video = $(this).siblings('video')[0];
            $(this).addClass('is-active');
            video.muted = !video.muted;
            console.log('unmuted');
        }
    });
    let demo_vol_modal = $('.default-modal__content-volume');
    demo_vol_modal.on('click', function(){
        if($(this).hasClass('is-active')){
            let video = $(this).siblings('video')[0];
            $(this).removeClass('is-active');
            video.muted = !video.muted;
            console.log('muted');

        }else{
            let video = $(this).siblings('video')[0];
            $(this).addClass('is-active');
            video.muted = !video.muted;
            console.log('unmuted');
        }
    });
    function mainvideoPlay($mainvideo){
        if( $('.main-video').length){
            let main_video = $mainvideo[0];
            let $main_video = $mainvideo;
            
            
            setTimeout(function(){
                if(!$main_video.hasClass('loaded')){
                    main_video_src = $main_video.attr('data-src');
                    $main_video.attr('src', main_video_src);
                    $main_video.find('source').attr('src', main_video_src);
                    $main_video.addClass('loaded');
                    main_video.play();
                }
    
    
            },10);
        }
    }
    let $main_video = $('.main-video');
    mainvideoPlay($main_video);
    // FULLSCREEN VIDEO
    if($('body').hasClass('body-transitions-page') || $('body').hasClass('body-text-animations-page') || $('body').hasClass('body-download-page')){
        let $fullscreen_video = $('.fullscreen-video')[0];
        $fullscreen_video.play();
        // let screen_width = document.documentElement.clientWidth;
        // let screen_height= document.documentElement.clientHeight;
        // set_fullscr_video_size(screen_width, screen_height);
    }


    function set_fullscr_video_size(width, height){
        $('.fullscreen-video').css({
            width: width, 
            height: height,
        });
    }

    // $(window).on('resize', function(){
    //     let screen_width = document.documentElement.clientWidth;
    //     let screen_height= document.documentElement.clientHeight;
    //     set_fullscr_video_size(screen_width, screen_height);
    // }); 
    $play_demo_btn = $('.play-demo-btn');
    $play_demo_btn.on('click', function(){
        let data_frame = $(this).attr('data-video');
        console.log(data_frame);
        this.insertAdjacentHTML('afterbegin',data_frame);
        let iframe = $(this).find('iframe');
        let $fullscreen_video = $('.fullscreen-video')[0];
        $fullscreen_video.pause();
        this.classList.add('is-hidden');
        iframe[0].onload = function(){
            $(iframe)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
        };
    });
});

//TRANSITION FOLDER-SLIDERs INIT FUNCTION
let folder_single_slieder = null;

function init_folder_swiper(){
    
    let tr_folder_sliders = document.querySelectorAll('.tr-folder-slider');
        tr_folder_sliders && tr_folder_sliders.forEach(function(el){
             folder_single_slieder = new Swiper(el, {
                observer: true,
                observeParents: true,
                slidesPerView: "auto",
                slidesPerColumn: 3,
                breakpoints: {
                    1350:{
                        slidesPerView: 5,
                        slidesPerColumn: 'auto',
                    },
                    767: {
                        slidesPerView: 3,
                        slidesPerColumn: 'auto',
                        allowTouchMove: false
                    }
                },
                pagination: {
                    el: '.tr-folder-slider__pag',
                 }
            });
        });
}



// //TRANSITIONS >> EFFECTS SWIPER
$(window).on('load', function () {
    init_folder_swiper();

});