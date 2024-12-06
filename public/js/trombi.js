
$(document).ready(function() {
    $('.open-popup').click(function(event) {
        event.preventDefault();
        $('#popup-prenom').text($(this).data('prenom'));
        $('#popup-role').text($(this).data('role'));
        $('#popup-description').text($(this).data('description'));
        $('#popup').show();
    });

    $('.close').click(function() {
        $('#popup').hide();
    });

    $(window).click(function(event) {
        if ($(event.target).is('#popup')) {
            $('#popup').hide();
        }
    });
});


