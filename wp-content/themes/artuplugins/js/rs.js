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


    $('body').on('submit', '.main-form', function(e){
        e.preventDefault();
        console.log($(this));
        let form = $(this),
        field = form.find('input'),
        url = form.attr('action'),
        form_data = form.serialize(),
        error_valid = 0,
        patternMail = /\A[^@]+@([^@\.]+\.)+[^@\.]+\z/;

        field.each(function(){
            if($(this).val() == ''){
                $(this).addClass('invalid');
                error_valid++;
            }
                    //validation email
            if ($(this).attr('name') == 'mail') {
                if (!$(this).val().match(/\./) || !$(this).val().match(/@/)){
                    $(this).addClass('invalid');
                    error_valid++;
                }
            }
            if ($(this).attr('name') == 'new_email') {
                if (!$(this).val().match(/\./) || !$(this).val().match(/@/)){
                    $(this).addClass('invalid');
                    error_valid++;
                }
            }
        });
        if(error_valid==0){
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: form_data,
                success: function(){
                    console.log('succes submit');
                    form[0].reset();
                },
                error: function(){
                    console.log('error submit');
                }
            });
            
        }
        
    });
    // $(".form-consultation").validate({
    //     rules: {
    //         "name": {
    //             required: true
    //         },
    //         "tel": {
    //             required: true,
    //             checkMin: true
    //         }
    //     },
    //     submitHandler: function(form) {
    //         console.log("submit");
    //         let fd = new FormData( form );
    //         // submitFormAnim(form);
    //         // return false;
    //         $.ajax({
    //             url: 'send.php',
    //             type: 'POST',
    //             contentType: false,
    //             processData: false,
    //             data: fd,
    //             success: function(msg){
    //                 $(form)[0].reset();
    //                 $(form).find('input[aria-invalid]').removeAttr('aria-invalid');
    //                 $(form).find(".input-group--notempty").removeClass("input-group--notempty");
    //                 submitFormAnim(form);
    //                 console.log('ok');
    //             },
    //             error: function(){
    //                 console.log('error');
    //             }
    //         });
    //     }
    // });




});