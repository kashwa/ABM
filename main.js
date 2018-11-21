$(document).ready(function () {
    // hide data always.
    $('.module').hide();

    // display by clicking the button
    $('#btn').click(function () {
        $('.module').toggle();
    });

    // submit with ajax.
    $('.submit').click(function () {
        $.post($('.module').attr('action'), $('.module :input').serializeArray());
        // Clear Input
        clearInput();
    });

    $('.module').submit(function () {
        return false;
    });
    
    function clearInput() {
        $(".module :input").each(function () {
            $(this).val('');
        });
    }
    
});