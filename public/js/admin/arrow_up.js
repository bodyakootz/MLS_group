$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    var start = 100;
    $(document).scroll( function(evt) {
        var currentPosition = $(this).scrollTop();
        if(currentPosition > start) {
        $('.arrow').css('opacity','1');
        }
        if(currentPosition < start) {
        $('.arrow').css('opacity','0');
        }
    });
});

