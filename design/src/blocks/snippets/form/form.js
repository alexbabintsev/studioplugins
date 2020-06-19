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

});