$(function() {

    $.validator.setDefaults({
        ignore: [],
    });
    $.validator.methods.email = function( value, element ) {
        return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);
    };
    $.validator.addMethod("checkMin", function (value, element, param) {
        // return value.replace(/[^0-9]/g, "").length === $(element).data("num-min");
        return value.replace(/[^A-Za-zА-Яа-я0-9]/g, "").length >= $(element).data("num-min");
    }, '');//Enter at least 11 characters

    $(".form-contacts").validate({
        rules: {
            "name": {
                required: true
            },
            "tel": {
                required: true,
                checkMin: true
            },
            "email": {
                required: true
            },
            'mes': {
                required: true
            }
        },
        submitHandler: function(form) {
            console.log("submit");
            let fd = new FormData( form );
            // submitFormAnim(form);
            // return false;
            $.ajax({
                url: 'send.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: fd,
                success: function(msg){
                    $(form)[0].reset();
                    $(form).find('input[aria-invalid]').removeAttr('aria-invalid');
                    $(form).find(".input-group--notempty").removeClass("input-group--notempty");
                    submitFormAnim(form);
                    console.log('ok');
                    // if(msg === 'ok') {
                    //     console.log('ok');
                    //     $(form)[0].reset();
                    //     $(form).find('input[aria-invalid]').removeAttr('aria-invalid');
                    //     $(form).find(".input-group--notempty").removeClass("input-group--notempty");
                    //     submitFormAnim(form);
                    // } else {
                    //     console.log('fail');
                    // }
                },
                error: function(){
                    console.log('error');
                }
            });
        }
    });

    $(".form-consultation").validate({
        rules: {
            "name": {
                required: true
            },
            "tel": {
                required: true,
                checkMin: true
            }
        },
        submitHandler: function(form) {
            console.log("submit");
            let fd = new FormData( form );
            // submitFormAnim(form);
            // return false;
            $.ajax({
                url: 'send.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: fd,
                success: function(msg){
                    $(form)[0].reset();
                    $(form).find('input[aria-invalid]').removeAttr('aria-invalid');
                    $(form).find(".input-group--notempty").removeClass("input-group--notempty");
                    submitFormAnim(form);
                    console.log('ok');
                },
                error: function(){
                    console.log('error');
                }
            });
        }
    });

    $(".form-request").validate({
        rules: {
            "name": {
                required: true
            },
            "tel": {
                required: true,
                checkMin: true
            },
            "email": {
                required: true
            },
            "mes": {
                required: true
            }
        },
        submitHandler: function(form) {
            console.log("submit");
            let fd = new FormData( form );
            $.ajax({
                url: 'send.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: fd,
                success: function(msg){
                    $(form)[0].reset();
                    $(form).find('input[aria-invalid]').removeAttr('aria-invalid');
                    $(form).find(".input-group--notempty").removeClass("input-group--notempty");
                    callbackClose();
                    setTimeout(function() {
                        showModal('modal-thx');
                    },300);
                    console.log('ok');
                },
                error: function(){
                    console.log('error');
                }
            });
        }
    });

    $(".form-calc").validate({
        rules: {
            "name": {
                required: true
            },
            "tel": {
                required: true,
                checkMin: true
            },
            "email": {
                required: true
            }
        },
        submitHandler: function(form) {
            console.log("submit");
            let fd = new FormData( form );

            let formA = $(form).find('.block-form__form-step')[0],
                step = $(form).find('.block-form__form-step').prev()[0];
            submitFormAnimA(formA, step);
            $.ajax({
                url: 'send.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: fd,
                success: function(msg){
                    // $(form)[0].reset();
                    $(form).find('.block-form__form-step input').val('');
                    $(form).find('input[aria-invalid]').removeAttr('aria-invalid');
                    $(form).find(".input-group--notempty").removeClass("input-group--notempty");
                    console.log('ok');
                },
                error: function(){
                    console.log('error');
                }
            });
        }
    });
    $(".modal-act-code form.main-form").on('submit',function (e) {
     e.preventDefault();
     $.post(myajax.url,{action: 'check_prodcode',act_code:$('.modal-act-code form.main-form [name="act_code"]').val()},function (data) {
         if(data.result)
         {
             scriptShowModal("modal-success-activation");
             $('.fn_all_products_list').replaceWith(data.all_list);
         }
         else
         {
             if(typeof(data.is_ban)!="undefined")
                 scriptShowModal("modal-ban");
             else
                 scriptShowModal("modal-fail");
         }
     },'JSON');
    });
    $(".modal-change-name form.main-form").on('submit',function (e) {
        e.preventDefault();
        //if(this.checkValidity()){
        $(".modal-change-name form.main-form .error").html('');
            $.post(myajax.url,$(this).serialize(),function (data) {
                if(data.result)
                {
                    scriptShowModal("modal-success-name-change");
                    $('.fn_name,.header__login .header__nav-link-loggedin').html(data.name);
                }
                else
                {
                    $(".modal-change-name form.main-form .error").html(data.msg);
                    console.debug(data.msg);
                }
            },'JSON');
        //}
    });
    $(".modal-change-email form.main-form").on('submit',function (e) {
        e.preventDefault();
        //if(this.checkValidity()){
        $(".modal-change-email form.main-form .error").html('');
            $.post(myajax.url,$(this).serialize(),function (data) {
                if(data.result)
                {
                    $('.fn_email').html(data.email);
                    scriptShowModal("modal-success-confirm-mail");
                }
                else
                {
                    $(".modal-change-email form.main-form .error").html(data.msg);
                    console.debug(data.msg);
                }
            },'JSON');
        //}
    });
    $(".modal-change-pass form.main-form").on('submit',function (e) {
        e.preventDefault();
        //if(this.checkValidity()){
        $(".modal-change-pass form.main-form .error").html('');
            $.post(myajax.url,$(this).serialize(),function (data) {
                if(data.result)
                {
                    scriptShowModal("modal-change-pass-new");
                    $(".modal-change-pass-new form.main-form input[name=\"current_password\"]").val($(".modal-change-pass form.main-form input[name=\"current_password\"]").val());
                }
                else
                {
                    $(".modal-change-pass form.main-form .error").html(data.msg);
                    console.debug(data.msg);
                }
            },'JSON');
        //}
    });
    $(".modal-change-pass-new form.main-form").on('submit',function (e) {
        e.preventDefault();
        //if(this.checkValidity()){
        $(".modal-change-pass-new form.main-form .error").html('');
            $.post(myajax.url,$(this).serialize(),function (data) {
                if(data.result)
                {
                    scriptShowModal("modal-success-password-change");
                }
                else
                {
                    if(typeof(data.errors)!="undefined")
                    {
                        for(let key in data.errors)
                        {
                            $(".modal-change-pass-new form.main-form .error."+key).html(data.errors[key]);
                        }
                    }
                    else
                        $(".modal-change-pass-new form.main-form .error.new_password").html(data.msg);
                }
            },'JSON');
        //}
    });
    $("body").on('click',".fn_unlink_os",function (e) {
        e.preventDefault();
        $.post(myajax.url,{action: 'unlink_pc',id:$(e.currentTarget).data('id')},function (data) {
            if(data.result)
            {
                $(e.currentTarget).parents('.linked-os__item').remove();
            }
            else
            {
                console.error(data.msg);
            }
        },'JSON');/**/
    });

    if($("section.help-c").length>0){
        if(window.location.hash) {
            if($(window.location.hash+".tabs-content").length>0)
            {
                let container = $(window.location.hash+".tabs-content").parents('.tabs');
                let tab_id = $(window.location.hash+".tabs-content").data('tabId');
                container.find('.tabs-content.is-active, .tabs-nav__item.is-active').removeClass('is-active');
                container.find(`[data-tab-id=${tab_id}]`).addClass('is-active');
            }
        }
        let get_params = (new URL(window.location.href)).searchParams;
        if(get_params.has('down_win'))
            $('a.down_win').click();
        if(get_params.has('down_mac'))
            $('a.down_mac').click();

    }
    /*if((new URL(window.location.href)).searchParams.has('confirm_email'))
    {
        scriptShowModal("modal-success-password-change");
    }*/
    if($('main.login-page').length>0&&(new URL(window.location.href)).searchParams.get('updated')=='password_changed')
    {
        scriptShowModal("modal-success-password-change");
    }
    $('.help-c-footer .wpcf7').on('wpcf7mailsent',function(e){

        let email = $(this).find('input[name="you-email"]').val();
        console.debug(email);
        $('.help-success a.help-success__mail').html(email).attr('href','mailto:'+email);
        $('.help-success p.help-success__text').html($(this).find('input[name="mess"]').val());
        $('.help-c-footer__form-block').addClass('is-active');
    });

    //LOADER FOR SUBSCRIBE FORM
    $('.subscribe__container .wpcf7').on('wpcf7mailsent', function(){

        let anim_btn = $(this).find('.main-form__submit-btn');
        let circle = $(this).find('.main-form__load');
        let check = $(this).find('.main-form__check');
        anim_btn.addClass('loaded');
        circle.addClass('loaded');
        setTimeout(function(){
            anim_btn.addClass('initstate')
        },3000);
        setTimeout(function(){
            check.addClass('is-active')
        },4000);
        if($(this).closest('body').hasClass('body-download-page')){
            ym(ym_kode,'reachGoal','button-subscribe')
        }
    });
    $('.modal-pre-order .wpcf7').on('wpcf7mailsent', function(){
        $('.modal-pre-order').addClass('is-sended');
    });
});
function scriptShowModal(mod)
{
    if($(".default-modal.is-active").length) {
        callbackCloseа();
            setTimeout(function () {showModal(mod);}, 300);
    }
    else
        showModal(mod);
}
function callbackCloseа() {


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
    /*if($('.popup-iframe')){
        let closeframe = $('.popup-iframe');
        $(closeframe)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    }*/
    // closeYoutube();




}