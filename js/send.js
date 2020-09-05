$(document).ready(function ($) {
    $('form').submit(function (event) {
        event.preventDefault();

        var form = $(this),
            data = form.serialize(),
            name = form.find('input[name="name"]'),
            phone = form.find('input[name="phone"]');

        if (name.val().length >= 3 && phone.val().length == 15) {
            $.ajax({
                type: 'POST',
                url: 'send.php',
                data: data,
                success: function () {
                    $(location).attr('href', 'thanks.html');
                    setTimeout(function () {
                        form.trigger('reset');
                    }, 1000);
                }
            });
        } else {
            alert('Заполните все поля!');
        }
    });
});