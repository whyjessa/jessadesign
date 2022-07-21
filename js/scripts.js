$( document ).ready(function() {
    $('.bars').click(function() {
        if ($(this).next().is(":hidden")) {
            $(this).next().slideDown();
        }
        else {
            $(this).next().slideUp();
        };
    });
});