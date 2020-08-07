document.addEventListener("DOMContentLoaded", function(event) {

    $('.um-field input').each(function(){
        if($(this).val().length){
            $(this).closest('.um-field').addClass('input-group--notempty');
        }
    });
    $('.input-group input').each(function(){
        if($(this).val().length){
            $(this).closest('.input-group').addClass('input-group--notempty');
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
        console.log('test');
        
    })
    $('.um-field input').on('blur', function(){
        if ($(this).parent().parent().hasClass('um-field-user_login')){
            if($(this).val().length < 3){
                $(this).parent().siblings('.um-field-error').remove();
                $(this).parent().parent().append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>Your Name must contain at least 3 characters</div>');   
            }else if ($(this).val().length > 20){
                $(this).parent().siblings('.um-field-error').remove();
                $(this).parent().parent().append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>Your Name must contain less than 20 characters</div>');
            }else{
                $(this).parent().siblings('.um-field-error').remove();
            }
        }
        if ($(this).parent().parent().hasClass('um-field-nickname')){
            if($(this).val().length < 3){
                $(this).parent().siblings('.um-field-error').remove();
                $(this).parent().parent().append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>Your Name must contain at least 3 characters</div>');   
            }else if ($(this).val().length > 20){
                $(this).parent().siblings('.um-field-error').remove();
                $(this).parent().parent().append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>Your Name must contain less than 20 characters</div>');
            }else{
                $(this).parent().siblings('.um-field-error').remove();
            }
        }
        if ($(this).parent().parent().hasClass('um-field-user_email')){
            if ($(this).val().length == 0 ){
                $(this).parent().siblings('.um-field-error').remove();
                $(this).parent().parent().append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>You must provide your email </div>');
                console.log('This is not a valid email');
            }else if(!$(this).val().match(/\./) || !$(this).val().match(/@/) && $(this).val() != 0){
                $(this).parent().siblings('.um-field-error').remove();
                $(this).parent().parent().append('<div class="um-field-error"><span class="um-field-arrow"><i class="um-faicon-caret-up"></i></span>This is not a valid email</div>');
            }else{
                $(this).parent().siblings('.um-field-error').remove();
            }
        }

    });

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
            if($('.um-notice').length){
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
                    um_error_permission = true;
                }, 1000 );
            }
        }
    });

});