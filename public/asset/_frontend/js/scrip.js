
$(document).ready(function () {
    $('.cbp-vm-details,.cbp-vm-price,.cbp-vm-add').hide();

    $(window).stellar();

    $("html").niceScroll({
        cursorcolor: "rgba(30,30,30,.5)",
        zindex: 999,
        scrollspeed: 100,
        mousescrollstep: 50,
        cursorborder: "0px solid #fff"
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() === 0) {
            $('.navdef').css('background-color', 'rgba(255, 255, 255, 0)');
            $('.navdef').css('margin-top', '30px');
        } else {
            $('.navdef').css('background-color', '#E04F67');
            $('.navdef').css('margin-top', '-30px');

        }
    });

    $(".cbp-vm-grid").click(function () {
        $('.cbp-vm-details,.cbp-vm-price,.cbp-vm-add').hide(1000);
    });

    $(".cbp-vm-list").click(function () {
        $('.cbp-vm-details,.cbp-vm-price,.cbp-vm-add').show(1000);
    });
});



