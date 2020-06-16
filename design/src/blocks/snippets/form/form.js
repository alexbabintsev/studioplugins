document.addEventListener("DOMContentLoaded", function(event) {

    $('.input-group input, .input-group textarea').on('focus', function () {
        $(this).closest('.input-group').addClass('input-group--focus');
    });
    $('.input-group input, .input-group textarea').on('blur', function () {
        $(this).closest('.input-group').removeClass('input-group--focus');
        if ( $(this).val().length ) {
            $(this).closest('.input-group').addClass('input-group--notempty');
        } else {
            $(this).closest('.input-group').removeClass('input-group--notempty');
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