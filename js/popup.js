$(document).ready(function () {
    $('#phone-1, #phone-2').inputmask('+38(999)9999999');

    $(document).on('click', '.open-popup', function () {
        var pw = $('.popup-wrapper'),
            form = $('.popup-wrapper form'),
            data = {};
        data.id = $(this).data('id');
        data.price = $(this).data('price');
        data.name = $(this).data('name');
        form.find('input[name="frId"]').val(data.id);
        form.find('input[name="price"]').val(data.price);
        pw.css({
            'display': 'block'
        });
    });

    $(document).on('click', '.close-popup', function () {
        $('.popup-wrapper').css({
            'display': 'none'
        });
        setTimeout(function () {
            $('.popup-wrapper form').trigger("reset");
        }, 1000);
    });

});