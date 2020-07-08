document.addEventListener("DOMContentLoaded", function(event) {
    $('.um-field input').each(function(){
        if($(this).val().length){
            $(this).closest('.um-field').addClass('input-group--notempty');
        }
    });
    $('.input-group input, .input-group textarea, .um-field input').on('focus', function () {
        $(this).closest('.input-group').addClass('input-group--focus');
        $(this).closest('.um-field').addClass('input-group--focus');
    });
    $('.input-group input, .input-group textarea, .um-field input').on('blur', function () {
        $(this).closest('.input-group').removeClass('input-group--focus');
        $(this).closest('.um-field').removeClass('input-group--focus');
        if ( $(this).val().length ) {
            $(this).closest('.input-group').addClass('input-group--notempty');
            $(this).closest('.um-field').addClass('input-group--notempty');
        } else {
            $(this).closest('.input-group').removeClass('input-group--notempty');
            $(this).closest('.um-field').removeClass('input-group--notempty');
        }
    });
    $('.input-group input').on('keyup', function(){
        $(this).removeClass('invalid');
    })
    $('input[type=tel]').inputmask({
        showMaskOnHover: false,
        showMaskOnFocus: true,
        placeholder: "-"
    });
    // $('.input-num-only').inputmask({
    //     regex: "\\d*",
    //     showMaskOnHover: false,
    //     showMaskOnFocus: true
    // });
    
    let um_error_permission = true;
    $('.main-form').on('change', function(){
        if(um_error_permission){
            let classList = $(this).find('.um-notice').attr('class').split(/\s+/);
            let text_error = $(this).find('.um-notice').text();
    
            $.each(classList, function(index, item) {
                if (item === 'um-error-code-incorrect_password') {
                    $('.main-form').find('.um-field-type_password').append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>'+text_error+'</div>')
                    console.log('сработал класс для пасса');
                }
                if (item === 'um-error-code-invalid_username') {
                    $('.main-form').find('.um-field-username').append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>'+text_error+'</div>')
                    console.log('сработал класс для логина');
                }
            });
            um_error_permission = false;
            setTimeout( function() {
                isEvent = true;
            }, 1000 );
        }
    });

});