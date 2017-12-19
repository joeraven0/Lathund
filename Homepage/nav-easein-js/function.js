$(function() {
    $(window).scroll(function() {
        console.log('scrolling ', $(window).scrollTop(), $(document).height());
        if($(window).scrollTop() >= 500 && $(window).scrollTop() <= ($(document).height() - 500)) {
            $('#minDIVid').fadeIn(200).removeClass('minDIVclass');     
        } else {
            $('#minDIVid').fadeOut(200).addClass('minDIVclass');
        }
    });
});
