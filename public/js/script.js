
$(document).ready(function () {
    $(window).stellar();

});

$(document).ready(
        function () {
            $("html").niceScroll({
                cursorcolor: "rgba(30,30,30,.5)",
                zindex: 999,
                scrollspeed: 100,
                mousescrollstep: 50,
                cursorborder: "0px solid #fff"
            });
        }
);

$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() === 0) {
            $('.navdef').css('background-color', 'rgba(255, 255, 255, 0)');
            $('.navdef').css('margin-top', '30px');
        } else {
            $('.navdef').css('background-color', '#E04F67');
            $('.navdef').css('margin-top', '-30px');
        }
    });
});

