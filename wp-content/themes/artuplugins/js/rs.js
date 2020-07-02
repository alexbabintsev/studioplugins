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
     $.post(myajax.url,{action: 'check_prodcode',product:$('.modal-act-code form.main-form [name="product"]').val(),act_code:$('.modal-act-code form.main-form [name="act_code"]').val()},function (data) {
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

});
function scriptShowModal(mod)
{
    if($(".default-modal.is-active").length) {
        callbackClose();
            setTimeout(function () {showModal(mod);}, 300);
    }
    else
        showModal(mod);
}