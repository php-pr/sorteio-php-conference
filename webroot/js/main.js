jQuery( document ).ready(function($) {
    $('#agree').click(function() {
        $('.hidden-form').slideDown();
        $('html, body').animate({scrollTop:1000},'1000');
    });
});