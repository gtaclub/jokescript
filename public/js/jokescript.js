function updateCountdown() {
    // 140 is the max message length
    var remaining = 255 - jQuery('.textarea').val().length;
    jQuery('.countdown').text(remaining + ' characters remaining.');
}



jQuery(document).ready(function ($) {

    $('.modal-button').click(function() {
        var target = $(this).data('target');
        $('html').addClass('is-clipped');
        $(target).addClass('is-active');
    });

    $('.modal-background, .modal-close').click(function() {
        $('html').removeClass('is-clipped');
        $(this).parent().removeClass('is-active');
    });

    $('.modal-card-head .delete, .modal-card-foot .button').click(function() {
        $('html').removeClass('is-clipped');
        $('#modal').removeClass('is-active');
    });

        updateCountdown();
        $('.textarea').change(updateCountdown);
        $('.textarea').keyup(updateCountdown);

});