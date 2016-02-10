$(function() {
    $('.one_page').click(function() {
        $('.not_always_visible_number').css('color','#fff');
        $('.always_visible_number').css('color','#d7dbdd');
        $(this).children('a').css('color','#939393 !important');
    });
});