$(window).scroll(function () {
    if ($(window).scrollTop() >= '112' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '112' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$(document).ready(function() {
    setBannerSize();
});

$(window).resize(function () {
    setBannerSize();
});

function setBannerSize () {
    $height = $('.banner').height();
    $('.banner .img-container').css({
        height: $height+'px'
    });
}

//Ajax contact form
$(function() {
    // Get the form.
    var form = $('#contact-form');
    // Get the messages div.
    var formMessages = $('#contact-form-output');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        $("#form-submit").val("Enviando...");

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('alert alert-danger');
            $(formMessages).addClass('alert alert-success');

            // Set the message text.
            $(formMessages).html(close+response);

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#mssg').val('');
            $("#form-submit").val("Enviar");
        })
            .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('alert alert-success');
            $(formMessages).addClass('alert alert-danger');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).html(close+data.responseText);
                $("#form-submit").val("Enviar");
            } else {
                $(formMessages).html(close+'Oops! Ocurrió un error no se pudo enviar la forma.');
                $("#form-submit").val("Enviar");
            }
        });

    });
});


//Ajax contact form
$(function() {
    var close = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    // Get the form.
    var form = $('#cotiza-form');
    // Get the messages div.
    var formMessages = $('#cotiza-form-output');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        $("#cotiza-form-submit").val("Enviando...");

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('alert alert-danger');
            $(formMessages).addClass('alert alert-success');

            // Set the message text.
            $(formMessages).html(close+response);

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#mssg').val('');
            $("#cotiza-form-submit").val("Enviar información");
        })
            .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('alert alert-success');
            $(formMessages).addClass('alert alert-danger');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).html(close+data.responseText);
                $("#cotiza-form-submit").val("Enviar información");
            } else {
                $(formMessages).html(close+'Oops! Ocurrió un error, intentelo nuevamente.');
                $("#cotiza-form-submit").val("Enviar información");
            }
        });

    });
});